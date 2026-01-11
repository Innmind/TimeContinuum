<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum\Clock;

use Innmind\TimeContinuum\{
    PointInTime,
    Format,
};
use Innmind\Immutable\Attempt;
use Psr\Log\LoggerInterface;

/**
 * @internal
 */
final class Logger implements Implementation
{
    public function __construct(
        private Implementation $clock,
        private LoggerInterface $logger,
    ) {
    }

    #[\Override]
    public function switch(callable $changeTimezone): self
    {
        return new self(
            $this->clock->switch($changeTimezone),
            $this->logger,
        );
    }

    #[\Override]
    public function now(): PointInTime
    {
        $now = $this->clock->now();
        $this->logger->debug('Current time is {point}', [
            'point' => $now->format(Format::iso8601()),
        ]);

        return $now;
    }

    /**
     * @psalm-mutation-free
     *
     * @param non-empty-string $date
     *
     * @return Attempt<PointInTime>
     */
    #[\Override]
    public function at(string $date, Format $format): Attempt
    {
        return $this
            ->clock
            ->at($date, $format)
            ->map(fn($point) => $this->log($point, $date, $format));
    }

    #[\NoDiscard]
    private function log(
        PointInTime $point,
        string $date,
        Format $format,
    ): PointInTime {
        /**
         * @psalm-suppress ImpureVariable
         * @psalm-suppress ImpurePropertyFetch
         * @psalm-suppress ImpureMethodCall
         */
        $this->logger->debug('Asked time {date} ({format}) resolved to {point}', [
            'date' => $date,
            'format' => $format->toString(),
            'point' => $point->format(Format::iso8601()),
        ]);

        return $point;
    }
}
