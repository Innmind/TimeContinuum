<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum;

final class Timezone
{
    private function __construct(
        private Offset $offset,
        private bool $dst,
    ) {
    }

    /**
     * @internal
     */
    public static function of(Offset $offset, bool $daylightSavingTime): self
    {
        return new self($offset, $daylightSavingTime);
    }

    public function offset(): Offset
    {
        return $this->offset;
    }

    public function daylightSavingTimeApplied(): bool
    {
        return $this->dst;
    }
}
