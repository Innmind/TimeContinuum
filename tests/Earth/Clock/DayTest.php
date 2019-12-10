<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Clock;

use Innmind\TimeContinuum\{
    Earth\Clock\Day,
    Earth\Clock\Month,
    Earth\Clock\Year,
    Clock\Day as DayInterface,
    Exception\DomainException,
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
        $this->assertSame(24, $day->numberOfHours());
        $this->assertSame(5, $day->toInt());
        $this->assertSame('Wednesday', $day->toString());
    }

    public function testThrowWhenDayTooLow()
    {
        $this->expectException(DomainException::class);
        $this->expectExceptionMessage('0');

        new Day($year = new Year(2016), new Month($year, 10), 0);
    }

    public function testThrowWhenDayTooHigh()
    {
        $this->expectException(DomainException::class);
        $this->expectExceptionMessage('32');

        new Day($year = new Year(2016), new Month($year, 10), 32);
    }
}
