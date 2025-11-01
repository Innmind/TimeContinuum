<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum\Clock;

use Innmind\TimeContinuum\{
    Offset,
    PointInTime,
    Format,
};
use Innmind\Immutable\Maybe;

/**
 * @internal
 */
final class Live implements Implementation
{
    public function __construct(private Offset $offset)
    {
    }

    #[\Override]
    public function use(Offset $offset): self
    {
        return new self($offset);
    }

    #[\Override]
    public function now(): PointInTime
    {
        return PointInTime::now()->changeOffset($this->offset);
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
        try {
            $datetime = \DateTimeImmutable::createFromFormat($format->toString(), $date);
        } catch (\Throwable) {
            /** @var Maybe<PointInTime> */
            return Maybe::nothing();
        }

        if ($datetime === false) {
            /** @var Maybe<PointInTime> */
            return Maybe::nothing();
        }

        if ($datetime->format($format->toString()) !== $date) {
            /** @var Maybe<PointInTime> */
            return Maybe::nothing();
        }

        return Maybe::just(PointInTime::at($datetime)->changeOffset($this->offset));
    }
}
