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
interface Implementation
{
    public function use(Offset $offset): self;
    public function now(): PointInTime;

    /**
     * @psalm-mutation-free
     *
     * @param non-empty-string $date
     *
     * @return Maybe<PointInTime>
     */
    public function at(string $date, Format $format): Maybe;
}
