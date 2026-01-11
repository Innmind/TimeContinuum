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
    #[\NoDiscard]
    public static function of(Offset $offset, bool $daylightSavingTime): self
    {
        return new self($offset, $daylightSavingTime);
    }

    #[\NoDiscard]
    public function offset(): Offset
    {
        return $this->offset;
    }

    #[\NoDiscard]
    public function daylightSavingTimeApplied(): bool
    {
        return $this->dst;
    }
}
