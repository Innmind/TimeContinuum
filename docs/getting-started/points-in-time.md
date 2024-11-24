# Points in time

See the [clocks](clocks.md) to learn to have access to these objects.

All examples below use the `#!php $point` variable that reference an instance of `#!php Innmind\TimeContinuum\PointInTime`.

## Year

```php
$point->year()->toInt();
```

This will return the year as an `int`.

```php
$point->year()->numberOfDays();
```

This returns `#!php 365` or `#!php 366` on leap years.

## Month

```php
$point->month()->ofYear();
```

This returns a value from the enum `#!php Innmind\TimeContinuum\Calendar\Month`.

```php
$point->month()->numberOfDays();
```

This returns an `int` between `#!php 28` and `#!php 31`.

## Day

```php
$point->day()->ofYear();
```

This returns an `int` between `#!php 0` and `#!php 365`.

```php
$point->day()->ofMonth();
```

This returns an `int` between `#!php 1` and `#!php 31`.

```php
$point->day()->ofWeek();
```

This returns a value from the enum `#!php Innmind\TimeContinuum\Calendar\Day`.

## Hour

```php
$point->hour()->toInt();
```

This returns an `int` between `#!php 0` and `#!php 23`.

## Minute

```php
$point->minute()->toInt();
```

This returns an `int` between `#!php 0` and `#!php 59`.

## Second

```php
$point->second()->toInt();
```

This returns an `int` between `#!php 0` and `#!php 59`.

## Millisecond

```php
$point->millisecond()->toInt();
```

This returns an `int` between `#!php 0` and `#!php 999`.

## Microsecond

```php
$point->microsecond()->toInt();
```

This returns an `int` between `#!php 0` and `#!php 999`.

## Offset

```php
$offset = $point->offset();
$hours = $offset->hours();
$minutes = $offset->minutes();
```

`$hours` is an `int` between `#!php -12` and `#!php 14`. `$minutes` is an `int` between `#!php 0` and `#!php 59` but usually is either `#!php 0`, `#!php 15`, `#!php 30` or `#!php 45`.

## Comparing points

```php
$point->aheadOf($anotherPoint);
$point->equals($anotherPoint);
```

Both methods return a `bool`.
