<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Period\Earth;

use Innmind\TimeContinuum\{
    PeriodInterface,
    Period\Earth\Hour
};

class HourTest extends \PHPUnit_Framework_TestCase
{
    public function testInterface()
    {
        $period = new Hour(20);

        $this->assertInstanceOf(PeriodInterface::class, $period);
        $this->assertSame(0, $period->years());
        $this->assertSame(0, $period->months());
        $this->assertSame(0, $period->days());
        $this->assertSame(20, $period->hours());
        $this->assertSame(0, $period->minutes());
        $this->assertSame(0, $period->seconds());
        $this->assertSame(0, $period->milliseconds());
    }

    /**
     * @dataProvider cases
     */
    public function testConvertToDays(int $hour, int $days, int $expectedHours)
    {
        $period = new Hour($hour);

        $this->assertSame(0, $period->years());
        $this->assertSame(0, $period->months());
        $this->assertSame($days, $period->days());
        $this->assertSame($expectedHours, $period->hours());
        $this->assertSame(0, $period->minutes());
        $this->assertSame(0, $period->seconds());
        $this->assertSame(0, $period->milliseconds());
    }

    /**
     * @expectedException Innmind\TimeContinuum\Exception\PeriodCantBeNegativeException
     */
    public function testThrowWhenHourIsNegative()
    {
        new Hour(-1);
    }

    public function testEquals()
    {
        $this->assertTrue((new Hour(25))->equals(new Hour(25)));
        $this->assertFalse((new Hour(2))->equals(new Hour(3)));
    }

    public function testAdd()
    {
        $period = new Hour(20);
        $period2 = $period->add($period);

        $this->assertInstanceOf(PeriodInterface::class, $period2);
        $this->assertSame(0, $period->years());
        $this->assertSame(0, $period->months());
        $this->assertSame(0, $period->days());
        $this->assertSame(20, $period->hours());
        $this->assertSame(0, $period->minutes());
        $this->assertSame(0, $period->seconds());
        $this->assertSame(0, $period->milliseconds());
        $this->assertSame(0, $period2->years());
        $this->assertSame(0, $period2->months());
        $this->assertSame(1, $period2->days());
        $this->assertSame(16, $period2->hours());
        $this->assertSame(0, $period2->minutes());
        $this->assertSame(0, $period2->seconds());
        $this->assertSame(0, $period2->milliseconds());
    }

    public function cases()
    {
        return [
            [20, 0, 20],
            [24, 1, 0],
            [25, 1, 1],
            [48, 2, 0],
            [49, 2, 1],
        ];
    }
}
