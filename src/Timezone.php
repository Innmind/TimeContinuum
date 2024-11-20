<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum;

/**
 * @psalm-immutable
 */
final class Timezone
{
    /**
     * @param int<-12, 14> $hours
     * @param int<0, 59> $minutes
     */
    private function __construct(
        private int $hours,
        private int $minutes,
        private bool $dst,
    ) {
    }

    /**
     * @psalm-pure
     *
     * @param int<-12, 14> $hours
     * @param int<0, 59> $minutes
     */
    public static function daylightSavingTime(int $hours, int $minutes = 0): self
    {
        return new self($hours, $minutes, true);
    }

    /**
     * @psalm-pure
     *
     * @param int<-12, 14> $hours
     * @param int<0, 59> $minutes
     */
    public static function of(int $hours, int $minutes = 0): self
    {
        return new self($hours, $minutes, false);
    }

    /**
     * @return int<-12, 14>
     */
    public function hours(): int
    {
        return $this->hours;
    }

    /**
     * @return int<0, 59>
     */
    public function minutes(): int
    {
        return $this->minutes;
    }

    public function daylightSavingTimeApplied(): bool
    {
        return $this->dst;
    }

    /**
     * @return non-empty-string
     */
    public function toString(): string
    {
        if ($this->hours === 0 && $this->minutes === 0) {
            return 'Z';
        }

        /** @var non-empty-string */
        return \sprintf(
            '%s%02d:%02d',
            $this->hours > 0 ? '+' : '-',
            \abs($this->hours),
            $this->minutes,
        );
    }
}
