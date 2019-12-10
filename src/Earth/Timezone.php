<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum\Earth;

trait Timezone
{
    private $utc;
    private $dst;

    private function use(string $zone)
    {
        $zone = new \DateTimeZone($zone);
        $currentOffset = $zone->getOffset(
            $now = new \DateTime('now', $zone)
        );
        $this->utc = new Timezone\UTC(
            $hour = (int) ($currentOffset / 3600),
            (int) abs(round(($currentOffset - $hour * 3600) / 60))
        );
        $this->dst = (bool) (int) $now->format('I');
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

    public function toString(): string
    {
        return (string) $this->utc;
    }
}
