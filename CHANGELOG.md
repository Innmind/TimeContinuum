# Changelog

## [Unreleased]

### Added

- `Innmind\TimeContinuum\Earth\PointInTime\Now::elapsedSince()` now use the high resolution time api when comparing to another instance of `Now` (to avoid errors when time _goes back_ due to the system clock re-synchronisation)

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
