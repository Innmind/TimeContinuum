# From v3 to v4

All namespaces are relative to `\Innmind\TimeContinuum\`.

These are the main changes, for an extensive list of changes go to the [changelog](https://github.com/Innmind/TimeContinuum/blob/develop/CHANGELOG.md).

## Clocks

### Live clock

=== "Before"
    ```php
    $clock = new Earth\Clock;
    ```

=== "After"
    ```php
    $clock = Clock::live();
    ```

### Logger

=== "Before"
    ```php
    $clock = new Logger\Clock(
        new Earth\Clock,
        /* an instance of Psr\Log\LoggerInterface */
    );
    ```

=== "After"
    ```php
    $clock = Clock::logger(
        Clock::live(),
        /* an instance of Psr\Log\LoggerInterface */
    );
    ```

### Frozen

=== "Before"
    ```php
    $clock = new Earth\FrozenClock(
        new Earth\PointInTime\PointInTime('some date'),
    );
    ```

=== "After"
    ```php
    $clock = Clock::live()
        ->at('some date', Format::iso8601())
        ->match(
            Clock::frozen(...),
            static fn() => throw new \LogicException('Use a valid date'),
        );
    ```

## Timezones

=== "Before"
    ```php
    $clock = new Earth\Clock(
        new Earth\Timezone\Europe\Paris,
    );
    ```

=== "After"
    ```php
    $clock = Clock::live()->switch(
        static fn(Timezones $timezones) => $timezones
            ->europe()
            ->paris(),
    );
    ```

## Access point in time offset

=== "Before"
    ```php
    $clock->now()->timezone()->hours();
    $clock->now()->timezone()->minutes();
    ```

=== "After"
    ```php
    $clock->now()->offset()->hours();
    $clock->now()->offset()->minutes();
    ```

## Modify point in time offset

=== "Before"
    ```php
    $clock->now()->changeTimezone(new Earth\Timezone\UTC(2, 0));
    ```

=== "After"
    ```php
    $clock->now()->changeOffset(Offset::plus(2, 0));
    ```

## Periods

=== "Before"
    ```php
    new Earth\Period\Year(42);
    new Earth\Period\Month(42);
    new Earth\Period\Day(42);
    new Earth\Period\Hour(42);
    new Earth\Period\Minute(42);
    new Earth\Period\Second(42);
    new Earth\Period\Millisecond(42);
    ```

=== "After"
    ```php
    Period::year(42);
    Period::month(42);
    Period::day(42);
    Period::hour(42);
    Period::minute(42);
    Period::second(42);
    Period::millisecond(42);
    ```

## Formats

=== "Before"
    ```php
    $clock->now()->format(new Earth\Format\ISO8601);
    ```

=== "After"
    ```php
    $clock->now()->format(Format::iso8601());
    ```

## Elapsed periods

=== "Before"
    ```php
    $elapsed = /* any instance of ElapsedPeriod */
    $milliseconds = $elapsed->milliseconds();
    ```

=== "After"
    ```php
    $elapsed = /* any instance of ElapsedPeriod */
    $period = $elapsed->asPeriod();
    $milliseconds = Period\Value::day->seconds($period->days());
    $milliseconds += Period\Value::hour->seconds($period->hours());
    $milliseconds += Period\Value::minute->seconds($period->minutes());
    $milliseconds *= 1_000;
    $milliseconds += $period->milliseconds();
    ```
