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
final class Frozen implements Implementation
{
    public function __construct(
        private PointInTime $now,
        private Live $concrete,
    ) {
    }

    #[\Override]
    public function use(Offset $offset): self
    {
        return new self(
            $this->now,
            $this->concrete->use($offset),
        );
    }

    #[\Override]
    public function now(): PointInTime
    {
        return $this->now;
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
        return $this
            ->concrete
            ->at($date, $format)
            ->map(fn($point) => $point->changeOffset($this->now->offset()));
    }
}
