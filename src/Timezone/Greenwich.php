<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum\Timezone;

use Innmind\TimeContinuum\TimezoneInterface;

final class Greenwich implements TimezoneInterface
{
    private $utc;
    private $dst = false;

    public function __construct()
    {
        $this->utc = new UTC(0, 0);
    }

    public static function daylightSavingTime(): self
    {
        $self = new self;
        $self->utc = new UTC(1, 0);
        $self->dst = true;

        return $self;
    }

    public function hours(): int
    {
        return $this->utc->hours();
    }

    public function minutes(): int
    {
        return $this->utc->minutes();
    }

    public function daylightSavingTimeApplied(): bool
    {
        return $this->dst;
    }

    public function __toString(): string
    {
        return (string) $this->utc;
    }
}
