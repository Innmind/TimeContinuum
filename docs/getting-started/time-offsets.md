# Time offsets

This is a value retrieved from a [point in time](points-in-time.md) and is expressed in a number of hours and minutes.

```php
use Innmind\TimeContinuum\Clock;

$offset = Clock::live()->now()->offset();
```

- `#!php $offset->hours()` returns an `int` between `#!php -12` and `#!php 14`
- `#!php $offset->minutes()` returns an `int` between `#!php 0` and `#!php 59`

Via this object you cannot know in which [timezone](timezones.md) you're in. If you need to keep track of this you should model this in your program and not rely on this information.

When you have access to a `PointInTime` you can change its offset like this:

```php
use Innmind\TimeContinuum\{
    Clock,
    Offset,
};

$utc = Clock::live()->now();
$newYork = $utc->changeOffset(Offset::minus(5));
```

If `#!php $utc` represents `#!php '2024-11-24T14:25:00+00:00'` then `#!php $newYork` represents `#!php '2024-11-24T09:25:00-05:00'`.
