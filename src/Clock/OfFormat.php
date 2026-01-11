<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum\Clock;

use Innmind\TimeContinuum\{
    Clock,
    Format,
    PointInTime,
};
use Innmind\Immutable\Attempt;

/**
 * @psalm-immutable
 */
final class OfFormat
{
    private function __construct(
        private Clock $clock,
        private Format $format,
    ) {
    }

    /**
     * @psalm-pure
     * @internal
     */
    public static function new(Clock $clock, Format $format): self
    {
        return new self($clock, $format);
    }

    /**
     * @param non-empty-string $date
     *
     * @return Attempt<PointInTime>
     */
    public function at(string $date): Attempt
    {
        return $this->clock->at($date, $this->format);
    }
}
