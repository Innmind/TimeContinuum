<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Period;

use Innmind\TimeContinuum\{
    PeriodInterface,
    Earth\Period\Day,
};
use PHPUnit\Framework\TestCase;

class DayTest extends TestCase
{
    public function testInterface()
    {
        $period = new Day(1000);

        $this->assertInstanceOf(PeriodInterface::class, $period);
        $this->assertSame(0, $period->years());
        $this->assertSame(0, $period->months());
        $this->assertSame(1000, $period->days());
        $this->assertSame(0, $period->hours());
        $this->assertSame(0, $period->minutes());
        $this->assertSame(0, $period->seconds());
        $this->assertSame(0, $period->milliseconds());
    }

    /**
     * @expectedException Innmind\TimeContinuum\Exception\PeriodCantBeNegativeException
     */
    public function testThrowWhenDayIsNegative()
    {
        new Day(-1);
    }

    public function testEquals()
    {
        $this->assertTrue((new Day(2))->equals(new Day(2)));
        $this->assertFalse((new Day(2))->equals(new Day(3)));
    }

    public function testAdd()
    {
        $period = new Day(1000);
        $period2 = $period->add($period);

        $this->assertInstanceOf(PeriodInterface::class, $period);
        $this->assertNotSame($period, $period2);
        $this->assertSame(0, $period->years());
        $this->assertSame(0, $period->months());
        $this->assertSame(1000, $period->days());
        $this->assertSame(0, $period->hours());
        $this->assertSame(0, $period->minutes());
        $this->assertSame(0, $period->seconds());
        $this->assertSame(0, $period->milliseconds());
        $this->assertSame(0, $period2->years());
        $this->assertSame(0, $period2->months());
        $this->assertSame(2000, $period2->days());
        $this->assertSame(0, $period2->hours());
        $this->assertSame(0, $period2->minutes());
        $this->assertSame(0, $period2->seconds());
        $this->assertSame(0, $period2->milliseconds());
    }
}
