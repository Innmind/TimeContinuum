<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum\Timezone;

trait Timezone
{
    private $utc;
    private $dst;

    private function use(string $zone)
    {
        $zone = new \DateTimeZone($zone);
        $currentOffset = $zone->getOffset(
            new \DateTime('now', $zone)
        );
        $zone = \IntlTimeZone::fromDateTimeZone($zone);
        $rawOffset = (int) $zone->getRawOffset() / 1000;
        $this->utc = new UTC(
            $hour = (int) ($currentOffset / 3600),
            (int) abs(round(($currentOffset - $hour * 3600) / 60))
        );
        $this->dst = $zone->useDaylightTime() && $currentOffset !== $rawOffset;
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
