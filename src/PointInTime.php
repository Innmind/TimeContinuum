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
     *
     * @param non-empty-string $date
     */
    public static function at(string $date): self
    {
        /** @psalm-suppress ImpureMethodCall */
        $datetime = new \DateTimeImmutable($date);
        /** @var int<0, max> */
        $milliseconds = $datetime->getTimestamp() * 1000;

        return new self(
            $datetime,
            null,
        );
    }

    /**
     * @internal
     */
    public static function now(): self
    {
        $now = new \DateTimeImmutable('now');
        /** @psalm-suppress ImpureMethodCallAcceptable since only a clock should instantiate this class */
        $highResolution = HighResolution::now();

        return new self(
            $now,
            $highResolution,
        );
    }

    /**
     * Since 1970-01-01T00:00:00+00:00
     */
    public function milliseconds(): int
    {
        return (int) $this->date->format('Uv');
    }

    public function year(): Year
    {
        return Year::of((int) $this->date->format('Y'));
    }

    public function month(): Month
    {
        return Month::of(
            $this->year(),
            Calendar\Month::of((int) $this->date->format('n')),
        );
    }

    public function day(): Day
    {
        /** @var int<1, 31> */
        $day = (int) $this->date->format('j');

        return Day::of(
            $this->year(),
            $this->month(),
            $day,
        );
    }

    public function hour(): Hour
    {
        /** @var int<0, 23> */
        $hour = (int) $this->date->format('G');

        return Hour::of($hour);
    }
    public function minute(): Minute
    {
        /** @var int<0, 59> */
        $minute = (int) $this->date->format('i');

        return Minute::of($minute);
    }

    public function second(): Second
    {
        /** @var int<0, 59> */
        $second = (int) $this->date->format('s');

        return Second::of($second);
    }

    public function millisecond(): Millisecond
    {
        /** @var int<0, 999> */
        $millisecond = (int) $this->date->format('v');

        return Millisecond::of($millisecond);
    }

    public function format(Format $format): string
    {
        return $this->date->format($format->toString());
    }

    public function changeOffset(Offset $offset): self
    {
        return new self(
            $this->date->setTimezone(
                new \DateTimeZone($offset->toString()),
            ),
            $this->highResolution,
        );
    }

    public function offset(): Offset
    {
        return Offset::from($this->date->format('P'));
    }

    public function elapsedSince(self $point): ElapsedPeriod
    {
        if (!\is_null($this->highResolution) && !\is_null($point->highResolution)) {
            return $this->highResolution->elapsedSince($point->highResolution);
        }

        return ElapsedPeriod::of($this->milliseconds() - $point->milliseconds());
    }

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

    public function equals(self $point): bool
    {
        return $this->milliseconds() === $point->milliseconds();
    }

    public function aheadOf(self $point): bool
    {
        return $this->milliseconds() > $point->milliseconds();
    }

    public function toString(): string
    {
        return $this->date->format(\DateTime::ATOM);
    }

    /**
     * @psalm-pure
     */
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

        if (\count($parts) === 0) {
            return null;
        }

        /** @psalm-suppress ImpureMethodCall */
        return \DateInterval::createFromDateString(\implode(' + ', $parts));
    }
}
