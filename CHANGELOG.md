# Changelog

## 3.5.0 - 2025-03-20

### Added

- Support for `innmind/black-box` `6`

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
