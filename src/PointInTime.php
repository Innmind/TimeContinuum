<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum;

use Innmind\TimeContinuum\{
    PointInTime\Year,
    PointInTime\Month,
    PointInTime\Day,
    PointInTime\Hour,
    PointInTime\Minute,
    PointInTime\Second,
    PointInTime\Millisecond,
    PointInTime\Microsecond,
    PointInTime\HighResolution,
};

/**
 * @psalm-immutable
 */
final class PointInTime
{
    private function __construct(
        private \DateTimeImmutable $date,
        private ?HighResolution $highResolution,
    ) {
    }

    /**
     * @psalm-pure
     * @internal
     */
    #[\NoDiscard]
    public static function at(\DateTimeImmutable $date): self
    {
        return new self(
            $date,
            null,
        );
    }

    /**
     * @internal
     */
    #[\NoDiscard]
    public static function now(): self
    {
        $now = new \DateTimeImmutable('now');
        $highResolution = HighResolution::now();

        return new self(
            $now,
            $highResolution,
        );
    }

    #[\NoDiscard]
    public function year(): Year
    {
        return Year::of((int) $this->date->format('Y'));
    }

    #[\NoDiscard]
    public function month(): Month
    {
        return Month::of($this->date);
    }

    #[\NoDiscard]
    public function day(): Day
    {
        return Day::of($this->date);
    }

    #[\NoDiscard]
    public function hour(): Hour
    {
        /** @var int<0, 23> */
        $hour = (int) $this->date->format('G');

        return Hour::of($hour);
    }

    #[\NoDiscard]
    public function minute(): Minute
    {
        /** @var int<0, 59> */
        $minute = (int) $this->date->format('i');

        return Minute::of($minute);
    }

    #[\NoDiscard]
    public function second(): Second
    {
        /** @var int<0, 59> */
        $second = (int) $this->date->format('s');

        return Second::of($second);
    }

    #[\NoDiscard]
    public function millisecond(): Millisecond
    {
        /** @var int<0, 999> */
        $millisecond = (int) $this->date->format('v');

        return Millisecond::of($millisecond);
    }

    #[\NoDiscard]
    public function microsecond(): Microsecond
    {
        /** @var int<0, 999> */
        $microsecond = ((int) $this->date->format('u')) % 1000;

        return Microsecond::of($microsecond);
    }

    #[\NoDiscard]
    public function format(Format|Format\Custom $format): string
    {
        if ($format instanceof Format\Custom) {
            $format = $format->normalize();
        }

        return $this->date->format($format->toString());
    }

    #[\NoDiscard]
    public function changeOffset(Offset $offset): self
    {
        return new self(
            $this->date->setTimezone(
                new \DateTimeZone($offset->toString()),
            ),
            $this->highResolution,
        );
    }

    #[\NoDiscard]
    public function offset(): Offset
    {
        return Offset::from($this->date->format('P'));
    }

    #[\NoDiscard]
    public function elapsedSince(self $point): ElapsedPeriod
    {
        if (!\is_null($this->highResolution) && !\is_null($point->highResolution)) {
            return $this->highResolution->elapsedSince($point->highResolution);
        }

        $seconds = ((int) $this->date->format('U')) - ((int) $point->date->format('U'));
        $milliseconds = $this->millisecond()->toInt() - $point->millisecond()->toInt();
        $microseconds = $this->microsecond()->toInt() - $point->microsecond()->toInt();

        if ($milliseconds < 0) {
            $seconds -= 1;
            $milliseconds += 1_000;
        }

        if ($microseconds < 0) {
            $milliseconds -= 1;
            $microseconds += 1_000;
        }

        if ($milliseconds < 0) {
            // This handles the case where any second diff is positive, but zero
            // milliseconds and any microsecond diff.
            // Duplication could be avoided by switching the 2 previous if but
            // it would require to compute the number of seconds to subtract.
            // The duplication seems more obvious to understand (at least for
            // now).
            $seconds -= 1;
            $milliseconds += 1_000;
        }

        if ($seconds < 0) {
            throw new \RuntimeException(\sprintf(
                'Negative period : %ss, %smillis, %smicros',
                $seconds,
                $milliseconds,
                $microseconds,
            ));
        }

        return ElapsedPeriod::of(
            $seconds,
            $milliseconds,
            $microseconds,
        );
    }

    #[\NoDiscard]
    public function goBack(Period $period): self
    {
        $interval = self::dateInterval($period);

        if (\is_null($interval)) {
            return $this;
        }

        return new self(
            $this->date->sub($interval),
            null,
        );
    }

    #[\NoDiscard]
    public function goForward(Period $period): self
    {
        $interval = self::dateInterval($period);

        if (\is_null($interval)) {
            return $this;
        }

        return new self(
            $this->date->add($interval),
            null,
        );
    }

    #[\NoDiscard]
    public function equals(self $point): bool
    {
        $format = Format::of('Y-m-dTH:i:s.u');
        $self = $this->changeOffset(Offset::utc())->format($format);
        $other = $point->changeOffset(Offset::utc())->format($format);

        return $self === $other;
    }

    #[\NoDiscard]
    public function aheadOf(self $point): bool
    {
        if (!\is_null($this->highResolution) && !\is_null($point->highResolution)) {
            return $this->highResolution->aheadOf($point->highResolution);
        }

        return $this->date > $point->date;
    }

    #[\NoDiscard]
    public function toString(): string
    {
        return $this->date->format('Y-m-d\TH:i:s.uP');
    }

    /**
     * @psalm-pure
     */
    #[\NoDiscard]
    private static function dateInterval(Period $period): ?\DateInterval
    {
        /** @var list<non-empty-string> */
        $parts = [];

        if ($period->years() > 0) {
            $parts[] = \sprintf(
                '%s years',
                $period->years(),
            );
        }

        if ($period->months() > 0) {
            $parts[] = \sprintf(
                '%s months',
                $period->months(),
            );
        }

        if ($period->days() > 0) {
            $parts[] = \sprintf(
                '%s days',
                $period->days(),
            );
        }

        if ($period->hours() > 0) {
            $parts[] = \sprintf(
                '%s hours',
                $period->hours(),
            );
        }

        if ($period->minutes() > 0) {
            $parts[] = \sprintf(
                '%s minutes',
                $period->minutes(),
            );
        }

        if ($period->seconds() > 0) {
            $parts[] = \sprintf(
                '%s seconds',
                $period->seconds(),
            );
        }

        if ($period->milliseconds() > 0) {
            $parts[] = \sprintf(
                '%s milliseconds',
                $period->milliseconds(),
            );
        }

        if ($period->microseconds() > 0) {
            $parts[] = \sprintf(
                '%s microseconds',
                $period->microseconds(),
            );
        }

        if (\count($parts) === 0) {
            return null;
        }

        /** @psalm-suppress ImpureMethodCall */
        return \DateInterval::createFromDateString(\implode(' + ', $parts)) ?: null;
    }
}
