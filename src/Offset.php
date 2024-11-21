<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum;

/**
 * @psalm-immutable
 */
final class Offset
{
    /**
     * @param int<-12, 14> $hours
     * @param int<0, 59> $minutes
     */
    private function __construct(
        private int $hours,
        private int $minutes,
        private bool $plus,
    ) {
    }

    /**
     * @psalm-pure
     */
    public static function utc(): self
    {
        return self::of(0, 0);
    }

    /**
     * @psalm-pure
     *
     * @param int<-12, 14> $hours
     * @param int<0, 59> $minutes
     */
    public static function of(int $hours, int $minutes = 0): self
    {
        return new self($hours, $minutes, $hours > 0);
    }

    /**
     * @psalm-pure
     * @internal
     */
    public static function from(string $string): self
    {
        [$hours, $minutes] = \explode(':', $string);

        /** @psalm-suppress ArgumentTypeCoercion */
        return new self(
            (int) $hours,
            (int) $minutes,
            \str_starts_with($string, '+'),
        );
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
            $this->plus ? '+' : '-',
            \abs($this->hours),
            $this->minutes,
        );
    }
}
