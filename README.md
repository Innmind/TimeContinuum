# TimeContinuum

|  `develop` |
|------------|
| [![codecov](https://codecov.io/gh/Innmind/TimeContinuum/branch/develop/graph/badge.svg)](https://codecov.io/gh/Innmind/TimeContinuum) |
| [![Build Status](https://travis-ci.org/Innmind/TimeContinuum.svg?branch=develop)](https://travis-ci.org/Innmind/TimeContinuum) |

This library allows you to handle time down to the millisecond. The point was to also be explicit for every component of dates, this is why every php _magic strings_ have been converted into objects.

It also provides interfaces so you can make mocks for your unit tests, of course it's only helpful if you use an implementation of `Clock` in your code instead of directly instanciating dates.

**All objects are immutable.**

## Installation

```sh
composer install innmind/time-continuum
```

## Usage

```php
use Innmind\TimeContinuum\Earth\Clock;

$clock = new Clock;
$now = $clock->now(); // return an instance of PointInTime
echo $now->toString(); //2016-10-11T12:17:30+02:00

$epoch = $clock->at('1970-01-01T00:00:00.000000Z');
```

Here we reference 2 points in time, the first is the exact moment we call `now` down to the millisecond and the second one is the epoch time (you can verify it via `$epoch->milliseconds()` that returns `0`).

The method `at()` accepts any string that is allowed by `\DateTimeImmutable`.

### Timezones

Say you want to work only with `Europe/Paris` timezone in your app but don't know if every environment will have the same configuration (like between your machine and the CI), you can enforce the timezone you'll work with like so:

```php
use Innmind\TimeContinuum\Earth\{
    Clock,
    Timezone\Europe\Paris,
};

$clock = new Clock(new Paris);

echo $clock->now()->timezone()->toString(); //+02:00 (when DST applied), otherwise +01:00
```

And if you're given a point in time via a method parameter but don't know its timezone, you can change it via:

```php
use Innmind\TimeContinuum\{
    PointInTime,
    Earth\Timezone\Europe\Paris
};

function foo(PointInTime $point)
{
    $point = $point->changeTimezone(new Paris);
}
```

**Note**: Don't forget to reassign into a variable as all objects are immutable.

### Time travel

```php
use Innmind\TimeContinuum\Earth\Period\{
    Year,
    Month,
    Minute,
    Millisecond,
};

$point = $clock
    ->now()
    ->goBack(
        (new Year(1))
            ->add(new Month(2))
            ->add(new Minute(24))
            ->add(new Millisecond(500))
    );
```

Here we go back 1 year, 2 months, 24 minutes and half a second back in time. The same objects are used to `goForward()`.

**Note**: Objects from the `Innmind\TimeContinuum\Earth\Period` namespace will convert values if you go out of the component boundary. For example, `new Millisecond(121500)` will result in this: `milliseconds() === 500`, `seconds() === 1` and `minutes() === 2`.

To ease some common operations this lib contains helpers such as `EndOfDay` to be used like this:

```php
use Innmind\TimeContinuum\Earth\Move\EndOfDay;

$endOfDay = new EndOfDay;
$endOfDay($clock->now()); // will return 2018-04-28 23:59:59.999
```

Check all the [helpers](src/Earth/Move/) to help you travel in time.

### Elapsed period

Sometimes we want to know how long a task takes in our code and we end up using `microtime(true) * 1000`. Here you can have a more _elegant_ way of doing it (and one that is unit test friendly)

```php
$start = $clock->now();
//run some code...
$duration = $clock
    ->now()
    ->elapsedSince($start)
    ->milliseconds();
```

And if you want a more comprehensible duration if it's above the second, you can reuse [`new Millisecond($duration)`](src/Earth/Period/Millisecond.php).

### Date formatting

In order to format a `PointInTime` you need to create a class implementing [`Format`](src/Format.php). This is done so you can make sure a date format will always have a name (and prevent you from putting _magic strings_ everywhere in your codebase).

All formats described as `\DateTime` constants are already available as formats here.

**Important**: here `ISO8601` truely respect the ISO format as opposed to [`\DateTime::ISO8601`](http://us1.php.net/manual/en/class.datetime.php#datetime.constants.iso8601).
