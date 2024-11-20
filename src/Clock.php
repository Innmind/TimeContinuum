<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum;

use Innmind\Immutable\Maybe;

interface Clock
{
    public function now(): PointInTime;

    /**
     * @psalm-pure
     *
     * @param non-empty-string $date
     *
     * @return Maybe<PointInTime>
     */
    public function at(string $date, Format $format = null): Maybe;
}
