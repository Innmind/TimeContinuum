<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone;

use Innmind\TimeContinuum\{
    Timezone\UTC,
    TimezoneInterface
};

class UTCTest extends \PHPUnit_Framework_TestCase
{
    public function testInterface()
    {
        $zone = new UTC(1);

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
        $this->assertSame(1, $zone->hours());
        $this->assertSame(0, $zone->minutes());
        $this->assertSame('+01:00', (string) $zone);
    }

    /**
     * @expectedException Innmind\TimeContinuum\Exception\InvalidTimezoneException
     */
    public function testThrowWhenHoursTooLow()
    {
        new UTC(-13);
    }

    /**
     * @expectedException Innmind\TimeContinuum\Exception\InvalidTimezoneException
     */
    public function testThrowWhenHoursTooHigh()
    {
        new UTC(13);
    }

    /**
     * @expectedException Innmind\TimeContinuum\Exception\InvalidTimezoneException
     */
    public function testThrowWhenMinutesTooLow()
    {
        new UTC(-11, -1);
    }

    /**
     * @expectedException Innmind\TimeContinuum\Exception\InvalidTimezoneException
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
        $this->assertSame($expected, (string) $zone);
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