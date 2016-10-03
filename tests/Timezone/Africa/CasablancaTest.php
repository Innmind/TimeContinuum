<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Africa;

use Innmind\TimeContinuum\{
    Timezone\Africa\Casablanca,
    TimezoneInterface
};

class CasablancaTest extends \PHPUnit_Framework_TestCase
{
    public function testInterface()
    {
        $zone = new \DateTimeZone('Africa/Casablanca');
        $currentOffset = $zone->getOffset(
            new \DateTime('now', $zone)
        );
        $zone = \IntlTimeZone::fromDateTimeZone($zone);
        $rawOffset = (int) $zone->getRawOffset() / 1000;
        var_dump(
            $hour = (int) ($currentOffset / 3600),
            (int) abs(round(($currentOffset - $hour * 3600) / 60)),
            date_default_timezone_get()
        );

        $zone = new Casablanca;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
        if ($zone->daylightSavingTimeApplied()) {
            $this->assertSame(1, $zone->hours());
            $this->assertSame(0, $zone->minutes());
            $this->assertSame('+01:00', (string) $zone);
        } else {
            $this->assertSame(0, $zone->hours());
            $this->assertSame(0, $zone->minutes());
            $this->assertSame('Z', (string) $zone);
        }
    }
}
