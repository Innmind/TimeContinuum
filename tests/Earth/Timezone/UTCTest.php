<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth;

use Innmind\TimeContinuum\{
    Earth\Timezone\UTC,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class UTCTest extends TestCase
{
    public function testInterface()
    {
        $zone = new UTC(1);

        $this->assertInstanceOf(Timezone::class, $zone);
        $this->assertSame(1, $zone->hours());
        $this->assertSame(0, $zone->minutes());
        $this->assertSame('+01:00', $zone->toString());
        $this->assertFalse($zone->daylightSavingTimeApplied());

        $this->assertSame('Z', (new UTC)->toString());
    }

    /**
     * @expectedException Innmind\TimeContinuum\Exception\InvalidTimezone
     */
    public function testThrowWhenHoursTooLow()
    {
        new UTC(-13);
    }

    /**
     * @expectedException Innmind\TimeContinuum\Exception\InvalidTimezone
     */
    public function testThrowWhenHoursTooHigh()
    {
        new UTC(15);
    }

    /**
     * @expectedException Innmind\TimeContinuum\Exception\InvalidTimezone
     */
    public function testThrowWhenMinutesTooLow()
    {
        new UTC(-11, -1);
    }

    /**
     * @expectedException Innmind\TimeContinuum\Exception\InvalidTimezone
     */
    public function testThrowWhenMinutesTooHigh()
    {
        new UTC(11, 60);
    }

    /**
     * @dataProvider cases
     */
    public function testFormat(string $expected, int $hours, int $minutes)
    {
        $zone = new UTC($hours, $minutes);

        $this->assertSame($hours, $zone->hours());
        $this->assertSame($minutes, $zone->minutes());
        $this->assertSame($expected, $zone->toString());
    }

    public function testDaylightSavingTime()
    {
        $zone = UTC::daylightSavingTime(2, 30);

        $this->assertInstanceOf(Timezone::class, $zone);
        $this->assertSame(2, $zone->hours());
        $this->assertSame(30, $zone->minutes());
        $this->assertTrue($zone->daylightSavingTimeApplied());
    }

    /**
     * @dataProvider cases
     */
    public function testFromString(string $zone, int $hours, int $minutes)
    {
        $zone = UTC::fromString($zone);

        $this->assertInstanceOf(UTC::class, $zone);
        $this->assertSame($hours, $zone->hours());
        $this->assertSame($minutes, $zone->minutes());
    }

    public function cases()
    {
        return [
            ['Z', 0, 0],
            ['-12:00', -12, 0],
            ['+12:00', 12, 0],
            ['-03:45', -3, 45],
            ['+03:45', 3, 45],
        ];
    }
}
