# Changelog

## [Unreleased]

### Fixed

- When within the same unit of time (seconds or milliseconds) 2 elapsed periods falsely reported than one was longer than the other.

## 4.0.2 - 2025-02-09

### Fixed

- When comparing 2 high resolution points in time, if the elapsed time between the 2 is higher than a second it could return that the start point is ahead of the end one.

## 4.0.1 - 2025-01-19

### Fixed

- Support for PHP `8.4`
- An error were `Innmind\TimeContinuum\MoveEndOfMonth` would change the month on leap years

## 4.0.0 - 2024-11-28

## Added

- `Innmind\TimeContinuum\Clock::switch()`
- `Innmind\TimeContinuum\Calendar\Month`
- `Innmind\TimeContinuum\PointInTime\Month::ofYear()`
- `Innmind\TimeContinuum\Calendar\Day`
- `Innmind\TimeContinuum\PointInTime\Day::ofWeek()`
- `Innmind\TimeContinuum\Period::year()` named constructor
- `Innmind\TimeContinuum\Period::month()` named constructor
- `Innmind\TimeContinuum\Period::day()` named constructor
- `Innmind\TimeContinuum\Period::hour()` named constructor
- `Innmind\TimeContinuum\Period::minute()` named constructor
- `Innmind\TimeContinuum\Period::second()` named constructor
- `Innmind\TimeContinuum\Period::millisecond()` named constructor
- `Innmind\TimeContinuum\PointInTime::microsecond()`
- `Innmind\TimeContinuum\Clock::ofFormat()`
- `Innmind\TimeContinuum\Offset::plus()`
- `Innmind\TimeContinuum\Offset::minus()`
- `Innmind\TimeContinuum\ElapsedPeriod::asPeriod()`
- `Innmind\TimeContinuum\Period\Value::seconds()`

### Changed

- `Innmind\TimeContinuum\Format` is now a `final class`
- Interfaces in the `Innmind\TimeContinuum\Clock` namespace are now `final class`es
- Classes in the `Innmind\TimeContinuum\Clock` namespace have been moved to `Innmind\TimeContinuum\PointInTime`
- `Innmind\TimeContinuum\Period` is now a `final class`
- `Innmind\TimeContinuum\ElapsedPeriod` is now a `final class`
- `Innmind\TimeContinuum\Earth\Period` has been renamed to `Innmind\TimeContinuum\Period\Value`
- `Innmind\TimeContinuum\PointInTime` is now a `final class`
- Classes in the `Fixtures\Innmind\TimeContinuum\Earth` namespace have been moved to `Fixtures\Innmind\TimeContinuum`
- `Innmind\TimeContinuum\Earth\Clock` as been renamed `Innmind\TimeContinuum\Clock\Live`
- `Innmind\TimeContinuum\Earth\FrozenClock` as been renamed `Innmind\TimeContinuum\Clock\Frozen`
- `Innmind\TimeContinuum\Logger\Clock` as been renamed `Innmind\TimeContinuum\Clock\Logger`
- Classes in the `Innmind\TimeContinuum\Earth\Move` namespace have been moved to `Innmind\TimeContinuum\Move`
- `Innmind\TimeContinuum\Timezone` is now a `final class`
- `Innmind\TimeContinuum\Clock` is now a `final class`
- `Innmind\TimeContinuum\Timezone` has been renamed `Innmind\TimeContinuum\Offset`
- `Innmind\TimeContinuum\PointInTime::changeTimezone()` has been renamed `Innmind\TimeContinuum\PointInTime::changeOffset()`
- `Innmind\TimeContinuum\PointInTime::timezone()` has been renamed `Innmind\TimeContinuum\PointInTime::offset()`
- `Innmind\TimeContinuum\PointInTime\Day::toInt()` has been renamed `Innmind\TimeContinuum\PointInTime\Day::ofMonth()`
- `Innmind\TimeContinuum\ElapsedPeriod::of()` is now an `internal` method
- `Innmind\TimeContinuum\Clock::at()` now requires a `Format`
- `Innmind\TimeContinuum\PointInTime::toString()` now contains the microseconds

### Removed

- Support for `innmind/immutable` `4`
- Classes in the `Innmind\TimeContinuum\Earth\Format` namespaces are now named constructors of `Innmind\TimeContinuum\Format`
- Classes in the `Innmind\TimeContinuum\Earth\Clock` namespace
- Classes in the `Innmind\TimeContinuum\Earth\Period` namespace
- `Innmind\TimeContinuum\Earth\ElapsedPeriod`
- `Innmind\TimeContinuum\Earth\PointInTime\PointInTime`
- `Innmind\TimeContinuum\Earth\PointInTime\Now`
- `Innmind\TimeContinuum\Earth\PointInTime\HighResolution`
- Earth timezones
- `Innmind\TimeContinuum\Timezone::daylightSavingTimeApplied()`
- `Innmind\TimeContinuum\Exception`
- `Innmind\TimeContinuum\PointInTime\Month::toInt()`
- `Innmind\TimeContinuum\PointInTime\Month::toString()`
- `Innmind\TimeContinuum\PointInTime\Day::weekNumber()`
- `Innmind\TimeContinuum\PointInTime\Day::toString()`
- `Innmind\TimeContinuum\PointInTime\Hour::toString()`
- `Innmind\TimeContinuum\PointInTime\Microsecond::toString()`
- `Innmind\TimeContinuum\PointInTime\Millisecond::toString()`
- `Innmind\TimeContinuum\PointInTime\Minute::toString()`
- `Innmind\TimeContinuum\PointInTime\Second::toString()`
- `Innmind\TimeContinuum\PointInTime\Year::toString()`
- `Innmind\TimeContinuum\ElapsedPeriod::maybe()`
- `Innmind\TimeContinuum\ElapsedPeriod::ofPeriod()`
- `Innmind\TimeContinuum\PointInTime::milliseconds()`
- `Innmind\TimeContinuum\Offset::of()`
- `Innmind\TimeContinuum\ElapsedPeriod::milliseconds()`
- `Innmind\TimeContinuum\Period\Value::second`
- `Innmind\TimeContinuum\Period\Value::milliseconds()`

## 3.4.1 - 2023-09-17

### Fixed

- Fix an off by one (second) error when computing elapsed time between 2 instances of `Now`

## 3.4.0 - 2023-09-16

### Added

- Support for `innmind/immutable` `5`

## 3.3.0 - 2023-07-08

### Added

- `Innmind\TimeContinuum\Earth\PointInTime\Now::elapsedSince()` now use the high resolution time api when comparing to another instance of `Now` (to avoid errors when time _goes back_ due to the system clock re-synchronisation)
- `Innmind\TimeContinuum\Earth\Period\Year::of()`
- `Innmind\TimeContinuum\Earth\Period\Second::of()`
- `Innmind\TimeContinuum\Earth\Period\Month::of()`
- `Innmind\TimeContinuum\Earth\Period\Minute::of()`
- `Innmind\TimeContinuum\Earth\Period\Millisecond::of()`
- `Innmind\TimeContinuum\Earth\Period\Hour::of()`
- `Innmind\TimeContinuum\Earth\Period\Day::of()`

### Changed

- Require `innmind/black-box` `5`

### Removed

- Support for PHP `8.1`

## 3.2.0 - 2023-02-11

### Added

- `Innmind\TimeContinuum\Earth\Period`
- `Innmind\TimeContinuum\Earth\ElapsedPeriod::ofPeriod()`
- `Innmind\TimeContinuum\Earth\Period\Millisecond::asElapsedPeriod()`
- `Innmind\TimeContinuum\Earth\Period\Second::asElapsedPeriod()`
- `Innmind\TimeContinuum\Earth\Period\Minute::asElapsedPeriod()`
- `Innmind\TimeContinuum\Earth\Period\Hour::asElapsedPeriod()`
- `Innmind\TimeContinuum\Earth\Period\Day::asElapsedPeriod()`
- `Innmind\TimeContinuum\Earth\Period\Composite::asElapsedPeriod()`

### Changed

- Require PHP `8.1`

## 3.1.0 - 2022-11-14

### Added

- `Innmind\TimeContinuum\Earth\ElapsedPeriod::of()`
- `Innmind\TimeContinuum\Earth\ElapsedPeriod::maybe()`

### Fixed

- `Innmind\TimeContinuum\Earth\Clock::at()` no longer throws when date string contains invalid characters
