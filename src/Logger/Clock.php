<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum\Logger;

use Innmind\TimeContinuum\{
    Clock as ClockInterface,
    PointInTime,
    Format,
    Earth\Format\ISO8601,
};
use Innmind\Immutable\Maybe;
use Psr\Log\LoggerInterface;

final class Clock implements ClockInterface
{
    private ClockInterface $clock;
    private LoggerInterface $logger;

    public function __construct(ClockInterface $clock, LoggerInterface $logger)
    {
        $this->clock = $clock;
        $this->logger = $logger;
    }

    public function now(): PointInTime
    {
        $now = $this->clock->now();
        $this->logger->debug('Current time is {point}', [
            'point' => $now->format(new ISO8601),
        ]);

        return $now;
    }

    /**
     * @psalm-pure
     */
    public function at(string $date, Format $format = null): Maybe
    {
        /**
         * @psalm-suppress ImpureVariable
         * @psalm-suppress ImpurePropertyFetch
         */
        return $this
            ->clock
            ->at($date, $format)
            ->map(fn($point) => $this->log($point, $date, $format));
    }

    /**
     * @psalm-pure
     */
    private function format(?Format $format): string
    {
        if (\is_null($format)) {
            return 'unknown';
        }

        $class = \get_class($format);

        return "{$class}({$format->toString()})";
    }

    private function log(
        PointInTime $point,
        string $date,
        ?Format $format,
    ): PointInTime {
        /**
         * @psalm-suppress ImpureVariable
         * @psalm-suppress ImpurePropertyFetch
         * @psalm-suppress ImpureMethodCall
         */
        $this->logger->debug('Asked time {date} ({format}) resolved to {point}', [
            'date' => $date,
            'format' => $this->format($format),
            'point' => $point->format(new ISO8601),
        ]);

        return $point;
    }
}
