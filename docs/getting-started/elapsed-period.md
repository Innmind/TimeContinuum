# Elapsed period

This is the number of microseconds between two [points in time](points-in-time.md).

```php
use Innmind\TimeContinuum\Clock;

$clock = Clock::live();
$start = $clock->now();
// do some stuff
$end = $clock->now();

$elapsed = $end->elapsedSince($start);
```

`$elapsed` is an instance of `#!php Innmind\TimeContinuum\ElapsedPeriod`.

Depending on the precision you need you can call either `$elapsed->milliseconds()` or `$elapsed->microseconds()`.

This is especially useful when working with network I/O to check for timeouts.

!!! success ""
    This example uses a monotonic clock internally to avoid the problem where the server clock re-synchronize and jump back in time. In this case `$end` is _technically_ before `$start` but the elapsed period is still a positive `int`.

??? info
    Bear in mind that the monotonic clock only works on `PointInTime`s returned by `$clock->now()`. If `->elapsedSince()` is called on points returned by `$clock->at()` it will compare the number od microseconds [since epoch](points-in-time.md#milliseconds-since-epoch).

??? warning
    `ElapsedPeriod` uses an `int` internally to represent the number of microseconds. If you compare two points far away between each other you may end up with an overflow.

    Since this feature is mainly intended for network I/O handling the points should be close from one another. So this bug won't be addresed at least for now.
