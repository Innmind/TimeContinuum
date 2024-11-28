<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum\PointInTime;

use Innmind\TimeContinuum\ElapsedPeriod;

/**
 * @psalm-immutable
 * @internal
 */
final class HighResolution
{
    /**
     * @param int<0, max> $seconds
     * @param int<0, 999_999_999> $nanoseconds
     */
    private function __construct(
        private int $seconds,
        private int $nanoseconds,
    ) {
    }

    /**
     * @internal
     */
    public static function now(): self
    {
        /**
         * @var int<0, max> $seconds
         * @var int<0, 999_999_999> $nanoseconds
         */
        [$seconds, $nanoseconds] = \hrtime();

        return new self($seconds, $nanoseconds);
    }

    /**
     * @internal
     *
     * @param int<0, max> $seconds
     * @param int<0, 999_999_999> $nanoseconds
     */
    public static function of(int $seconds, int $nanoseconds): self
    {
        return new self($seconds, $nanoseconds);
    }

    public function aheadOf(self $other): bool
    {
        if ($this->seconds > $other->seconds) {
            return true;
        }

        return $this->nanoseconds > $other->nanoseconds;
    }

    public function elapsedSince(self $other): ElapsedPeriod
    {
        $seconds = $this->seconds - $other->seconds;
        $nanoseconds = $this->nanoseconds - $other->nanoseconds;

        if ($nanoseconds < 0) {
            $seconds -= 1;
            $nanoseconds += 1_000_000_000;
        }

        /** @var int<0, 999> */
        $microseconds = ((int) ($nanoseconds / 1_000)) % 1_000;
        /** @var int<0, 999> */
        $milliseconds = ((int) ($nanoseconds / 1_000_000)) % 1_000;

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
}
