<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum;

interface Clock
{
    public function now(): PointInTime;

    /**
     * @psalm-pure
     */
    public function at(string $date, Format $format = null): PointInTime;
}
