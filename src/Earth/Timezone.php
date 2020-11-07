<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum\Earth;

use Innmind\TimeContinuum\Timezone as TimezoneInterface;

/**
 * @psalm-immutable
 */
abstract class Timezone implements TimezoneInterface
{
    private Timezone\UTC $utc;
    private bool $dst;

    public function __construct(string $zone)
    {
        $zone = new \DateTimeZone($zone);
        $currentOffset = $zone->getOffset(
            $now = new \DateTimeImmutable('now', $zone),
        );
        $this->utc = new Timezone\UTC(
            $hour = (int) ($currentOffset / 3600),
            (int) \abs(\round(($currentOffset - $hour * 3600) / 60)),
        );
        $this->dst = (bool) (int) $now->format('I');
    }

    final public function hours(): int
    {
        return $this->utc->hours();
    }

    final public function minutes(): int
    {
        return $this->utc->minutes();
    }

    final public function daylightSavingTimeApplied(): bool
    {
        return $this->dst;
    }

    final public function toString(): string
    {
        return $this->utc->toString();
    }
}
