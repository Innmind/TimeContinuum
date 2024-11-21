<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum;

use Innmind\TimeContinuum\Clock\{
    Live,
    Frozen,
    Logger,
};
use Innmind\Immutable\Maybe;
use Psr\Log\LoggerInterface;

final class Clock
{
    private function __construct(
        private Live|Frozen|Logger $implementation,
    ) {
    }

    public static function live(): self
    {
        return new self(new Live);
    }

    public static function frozen(PointInTime $point): self
    {
        return new self(new Frozen($point));
    }

    public static function logger(self $clock, LoggerInterface $logger): self
    {
        return new self(new Logger($clock, $logger));
    }

    public function now(): PointInTime
    {
        return $this->implementation->now();
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
        return $this->implementation->at($date, $format);
    }
}
