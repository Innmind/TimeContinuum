<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum\Timezone\Africa;

use Innmind\TimeContinuum\TimezoneInterface;

final class Casablanca implements TimezoneInterface
{
    private $utc;

    public function __construct()
    {
        $this->utc = new UTC(0, 0);
    }

    public static function summerTime(): self
    {
        $self = new self;
        $self->utc = new UTC(1, 0);

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

    public function __toString(): string
    {
        return (string) $this->utc;
    }
}