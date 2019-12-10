<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Period;

use Innmind\TimeContinuum\{
    PeriodInterface,
    Earth\Period\Month,
};
use PHPUnit\Framework\TestCase;

class MonthTest extends TestCase
{
    public function testInterface()
    {
        $period = new Month(10);

        $this->assertInstanceOf(PeriodInterface::class, $period);
        $this->assertSame(0, $period->years());
        $this->assertSame(10, $period->months());
        $this->assertSame(0, $period->days());
        $this->assertSame(0, $period->hours());
        $this->assertSame(0, $period->minutes());
        $this->assertSame(0, $period->seconds());
        $this->assertSame(0, $period->milliseconds());
    }

    /**
     * @dataProvider cases
     */
    public function testConvertMonthsIntoYears(int $months, int $year, int $expectedMonths)
    {
        $period = new Month($months);

        $this->assertSame($year, $period->years());
        $this->assertSame($expectedMonths, $period->months());
        $this->assertSame(0, $period->days());
        $this->assertSame(0, $period->hours());
        $this->assertSame(0, $period->minutes());
        $this->assertSame(0, $period->seconds());
        $this->assertSame(0, $period->milliseconds());
    }

    /**
     * @expectedException Innmind\TimeContinuum\Exception\PeriodCantBeNegativeException
     */
    public function testThrowWhenMonthIsNegative()
    {
        new Month(-1);
    }

    public function testEquals()
    {
        $this->assertTrue((new Month(20))->equals(new Month(20)));
        $this->assertFalse((new Month(2))->equals(new Month(3)));
    }

    public function testAdd()
    {
        $period = new Month(10);
        $period2 = $period->add($period);

        $this->assertInstanceOf(PeriodInterface::class, $period2);
        $this->assertSame(0, $period->years());
        $this->assertSame(10, $period->months());
        $this->assertSame(0, $period->days());
        $this->assertSame(0, $period->hours());
        $this->assertSame(0, $period->minutes());
        $this->assertSame(0, $period->seconds());
        $this->assertSame(0, $period->milliseconds());
        $this->assertSame(1, $period2->years());
        $this->assertSame(8, $period2->months());
        $this->assertSame(0, $period2->days());
        $this->assertSame(0, $period2->hours());
        $this->assertSame(0, $period2->minutes());
        $this->assertSame(0, $period2->seconds());
        $this->assertSame(0, $period2->milliseconds());
    }

    public function cases()
    {
        return [
            [12, 1, 0],
            [11, 0, 11],
            [13, 1, 1],
            [24, 2, 0],
            [25, 2, 1],
        ];
    }
}
