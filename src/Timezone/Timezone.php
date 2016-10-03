<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum\Timezone;

trait Timezone
{
    private $utc;
    private $dst;

    private function use(string $zone)
    {
        $zone = \IntlTimeZone::createTimeZone($zone);
        $offset = $zone->getRawOffset();
        $offset += $zone->useDaylightTime() ? $zone->getDSTSavings() : 0;
        $this->utc = new UTC(
            $hour = (int) ($offset / 3600000),
            (int) abs(round(($offset - $hour * 3600000) / 60000))
        );
        $this->dst = $zone->useDaylightTime();
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
