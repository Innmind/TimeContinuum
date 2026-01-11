# Clocks

!!! success "Dependency injection"
    A `Clock` should be treated as a singleton and instanciated once in your program and then passed as argument everywhere you need it in your program.

## Live

This is the clock you should use in your programs. By default it's set to the [UTC](https://en.wikipedia.org/wiki/UTC%2B00:00) [timezone](timezones.md) (no matter the configuration of your machine).

To access the current time you would do:

```php
use Innmind\TimeContinuum\{
    Clock,
    PointInTime,
};

$clock = Clock::live();
$point = $clock->now(); // instance of PointInTime
echo $point->toString(); // prints something like 2024-11-24T12:34:25+00:00
```

And to build a [`PointInTime`](points-in-time.md) back from a `string`:

```php
use Innmind\TimeContinuum\{
    Clock,
    Format,
    PointInTime,
};
use Innmind\Immutable\Attempt;

$time = '2024-11-24T12:34:25+00:00';

$clock = Clock::live();
$at = $clock->at($time, Format::iso8601()); // instance of Attempt<PointInTime>
$point = $at->match(
    static fn(PointInTime $point) => $point,
    static fn() => null,
);
```

The `at` method returns an [`Attempt` monad](https://innmind.org/Immutable/structures/attempt/) that may contain a `PointInTime`. This is in case the `#!php $time` variable contains a value that doesn't correspond to the specified format (here `ISO8601`).

This means that the `#!php $point` variable here is an instance of `PointInTime` because the `#!php $time` value is valid. If it's invalid then `#!php $point` is `#!php null`.

## Logger

This clock will create a log everytime you call `#!php ->now()` or `#!php ->at()`.

To build this clock you need another clock (typically a live one) and a [PSR logger](https://packagist.org/packages/psr/log):

```php
use Innmind\TimeContinuum\Clock;
use Psr\Log\LoggerInterface;

$clock = Clock::logger(
    Clock::live(),
    /* any instance of LoggerInterface (1) */
);
```

1. Like [monolog](https://packagist.org/packages/monolog/monolog) for example.

You can then use `#!php $clock` like any other clock.

## Frozen

This clock is only useful when testing your program. It allows to specify the point in time at which your programs run.

This way you can test your program for special scenarii like a leap year, daylight saving time and so on...

```php
use Innmind\TimeContinuum\{
    Clock,
    Format,
};

$clock = Clock::live()
    ->at('2024-11-24T12:34:25+00:00', Format::iso8601())
    ->match(
        Clock::frozen(...),
        static fn(\Throwable $e) => throw $e
    );
```

??? warning
    Bear in mind that `#!php $clock->now()` will always return the same object. This means that if your program rely on calculating an [elapsed period](elapsed-period.md) it will always return `#!php 0`. If run in a loop you may end up with an inifinite one.
