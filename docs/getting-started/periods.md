# Periods

## Go forward in time

```php
use Innmind\TimeContinuum\{
    Clock,
    Period,
};

$future = Clock::live()
    ->now()
    ->goForward(
        Period::day(1)
            ->and(Period::hour(12)),
    );
```

`#!php $future` is now a day and a half ahead of the current time.

## Go back in time

```php
use Innmind\TimeContinuum\{
    Clock,
    Period,
};

$past = Clock::live()
    ->now()
    ->goBack(
        Period::day(1)
            ->and(Period::hour(12)),
    );
```

`#!php $past` is now a day and a half behind of the current time.

## Compare to an elapsed period

```php
use Innmind\TimeContinuum\{
    Clock,
    Period,
};

$clock = Clock::live();
$start = $clock->now();
// do some stuff
$clock
    ->now()
    ->elapsedSince($start)
    ->longerThan(
        Period::second(10)->asElapsedPeriod(),
    ); // returns a bool
```
