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
     * @param int<0, max> $nanoseconds
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
         * @var int<0, max> $nanoseconds
         */
        [$seconds, $nanoseconds] = \hrtime();

        return new self($seconds, $nanoseconds);
    }

    /**
     * @internal
     *
     * @param int<0, max> $seconds
     * @param int<0, max> $nanoseconds
     */
    public static function of(int $seconds, int $nanoseconds): self
    {
        return new self($seconds, $nanoseconds);
    }

    public function elapsedSince(self $time): ElapsedPeriod
    {
        $seconds = $this->seconds - $time->seconds;
        $nanoseconds = $this->nanoseconds - $time->nanoseconds;

        $microseconds = ($seconds * 1_000_000) + (int) ($nanoseconds / 1_000);

        return ElapsedPeriod::of($microseconds);
    }
}
