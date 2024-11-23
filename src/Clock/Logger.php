<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum\Clock;

use Innmind\TimeContinuum\{
    Clock,
    PointInTime,
    Format,
    Timezones,
    Timezone,
};
use Innmind\Immutable\Maybe;
use Psr\Log\LoggerInterface;

/**
 * @internal
 */
final class Logger
{
    private Clock $clock;
    private LoggerInterface $logger;

    public function __construct(Clock $clock, LoggerInterface $logger)
    {
        $this->clock = $clock;
        $this->logger = $logger;
    }

    /**
     * @param callable(Timezones): Timezone $changeTimezone
     */
    public function switch(callable $changeTimezone): self
    {
        return new self(
            $this->clock->switch($changeTimezone),
            $this->logger,
        );
    }

    public function now(): PointInTime
    {
        $now = $this->clock->now();
        $this->logger->debug('Current time is {point}', [
            'point' => $now->format(Format::iso8601()),
        ]);

        return $now;
    }

    /**
     * @psalm-pure
     *
     * @param non-empty-string $date
     *
     * @return Maybe<PointInTime>
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

        return $format->toString();
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
            'point' => $point->format(Format::iso8601()),
        ]);

        return $point;
    }
}
