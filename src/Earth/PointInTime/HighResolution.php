<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum\Earth\PointInTime;

use Innmind\TimeContinuum\Earth\ElapsedPeriod;

/**
 * @psalm-immutable
 */
final class HighResolution
{
    /** @var 0|positive-int */
    private int $seconds;
    /** @var 0|positive-int */
    private int $nanoseconds;

    /**
     * @param 0|positive-int $seconds
     * @param 0|positive-int $nanoseconds
     */
    private function __construct(int $seconds, int $nanoseconds)
    {
        $this->seconds = $seconds;
        $this->nanoseconds = $nanoseconds;
    }

    public static function now(): self
    {
        /**
         * @var 0|positive-int $seconds
         * @var 0|positive-int $nanoseconds
         */
        [$seconds, $nanoseconds] = \hrtime();

        return new self($seconds, $nanoseconds);
    }

    public function elapsedSince(self $time): ElapsedPeriod
    {
        $seconds = $this->seconds - $time->seconds;
        $nanoseconds = match ($seconds) {
            0 => $this->nanoseconds - $time->nanoseconds,
            default => (1_000_000_000 + $this->nanoseconds) - $time->nanoseconds,
        };

        $milliseconds = ($seconds * 1_000) + (int) ($nanoseconds / 1_000_000);

        return ElapsedPeriod::of($milliseconds);
    }
}
