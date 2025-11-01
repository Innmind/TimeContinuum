<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum\Clock;

use Innmind\TimeContinuum\{
    PointInTime,
    Format,
    Offset,
};
use Innmind\Immutable\Maybe;

/**
 * @internal
 */
final class Via implements Implementation
{
    /**
     * @param \Closure(): PointInTime $now
     */
    public function __construct(
        private \Closure $now,
        private Offset $offset,
    ) {
    }

    #[\Override]
    public function use(Offset $offset): self
    {
        return new self(
            $this->now,
            $offset,
        );
    }

    #[\Override]
    public function now(): PointInTime
    {
        return ($this->now)()->changeOffset($this->offset);
    }

    /**
     * @psalm-mutation-free
     *
     * @param non-empty-string $date
     *
     * @return Maybe<PointInTime>
     */
    #[\Override]
    public function at(string $date, Format $format): Maybe
    {
        return new Live(Offset::utc())
            ->at($date, $format)
            ->map(fn($point) => $point->changeOffset($this->offset));
    }
}
