# TimeContinuum

[![Build Status](https://github.com/Innmind/TimeContinuum/workflows/CI/badge.svg?branch=master)](https://github.com/Innmind/TimeContinuum/actions?query=workflow%3ACI)
[![codecov](https://codecov.io/gh/Innmind/TimeContinuum/branch/develop/graph/badge.svg)](https://codecov.io/gh/Innmind/TimeContinuum)
[![Type Coverage](https://shepherd.dev/github/innmind/timecontinuum/coverage.svg)](https://shepherd.dev/github/innmind/timecontinuum)

This library allows you to handle time down to the millisecond. The point was to also be explicit for every component of dates, this is why every php _magic strings_ have been converted into objects.

**All objects are immutable.**

## Installation

```sh
composer install innmind/time-continuum
```

## Usage

```php
use Innmind\TimeContinuum\{
    Clock,
    PointInTime,
    Format,
};
use Innmind\Immutable\Maybe;

$clock = Clock::live();
$now = $clock->now(); // return an instance of PointInTime
echo $now->toString(); // 2016-10-11T12:17:30.123456+02:00

$epoch = $clock->at(
    '1970-01-01T00:00:00.000000+00:00',
    Format::iso8601(),
); // Maybe<PointInTime>
```

Here we reference 2 points in time, the first is the exact moment we call `now` down to the microsecond and the second one is the epoch time.

The method `at()` accepts any string that is allowed by `\DateTimeImmutable`.

## Documentation

Full documentation is available at <http://innmind.org/TimeContinuum/>.
