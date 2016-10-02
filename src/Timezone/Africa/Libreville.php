<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum\Timezone\Africa;

use Innmind\TimeContinuum\{
    TimezoneInterface,
    Timezone\UTC
};

final class Libreville implements TimezoneInterface
{
    private $utc;

    public function __construct()
    {
        $this->utc = new UTC(1, 0);
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
