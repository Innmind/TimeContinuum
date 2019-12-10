<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Clock;

use Innmind\TimeContinuum\{
    Earth\Clock\Month,
    Earth\Clock\Year,
    Clock\Month as MonthInterface,
};
use PHPUnit\Framework\TestCase;

class MonthTest extends TestCase
{
    public function testInterface()
    {
        $month = new Month(new Year(2016), 10);

        $this->assertInstanceOf(MonthInterface::class, $month);
        $this->assertSame(31, $month->numberOfDays());
        $this->assertSame(10, $month->toInt());
        $this->assertSame('October', (string) $month);
    }

    /**
     * @expectedException Innmind\TimeContinuum\Exception\InvalidArgumentException
     */
    public function testThrowWhenMonthTooLow()
    {
        new Month(new Year(2016), 0);
    }

    /**
     * @expectedException Innmind\TimeContinuum\Exception\InvalidArgumentException
     */
    public function testThrowWhenMonthTooHigh()
    {
        new Month(new Year(2016), 13);
    }
}
