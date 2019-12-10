<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Clock;

use Innmind\TimeContinuum\{
    Earth\Clock\Day,
    Earth\Clock\Month,
    Earth\Clock\Year,
    Clock\Day as DayInterface,
};
use PHPUnit\Framework\TestCase;

class DayTest extends TestCase
{
    public function testInterface()
    {
        $day = new Day($year = new Year(2016), new Month($year, 10), 5);

        $this->assertInstanceOf(DayInterface::class, $day);
        $this->assertSame(3, $day->weekNumber());
        $this->assertSame(278, $day->ofYear());
        $this->assertSame(5, $day->toInt());
        $this->assertSame('Wednesday', (string) $day);
    }

    /**
     * @expectedException Innmind\TimeContinuum\Exception\InvalidArgumentException
     */
    public function testThrowWhenDayTooLow()
    {
        new Day($year = new Year(2016), new Month($year, 10), 0);
    }

    /**
     * @expectedException Innmind\TimeContinuum\Exception\InvalidArgumentException
     */
    public function testThrowWhenDayTooHigh()
    {
        new Day($year = new Year(2016), new Month($year, 10), 32);
    }
}
