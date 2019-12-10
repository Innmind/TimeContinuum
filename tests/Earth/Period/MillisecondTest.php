<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Period;

use Innmind\TimeContinuum\{
    PeriodInterface,
    Earth\Period\Millisecond,
};
use PHPUnit\Framework\TestCase;

class MillisecondTest extends TestCase
{
    public function testInterface()
    {
        $period = new Millisecond(20);

        $this->assertInstanceOf(PeriodInterface::class, $period);
        $this->assertSame(0, $period->years());
        $this->assertSame(0, $period->months());
        $this->assertSame(0, $period->days());
        $this->assertSame(0, $period->hours());
        $this->assertSame(0, $period->minutes());
        $this->assertSame(0, $period->seconds());
        $this->assertSame(20, $period->milliseconds());
    }

    /**
     * @dataProvider cases
     */
    public function testConvertToSeconds(
        int $millisecond,
        int $days,
        int $hours,
        int $minutes,
        int $seconds,
        int $expectedMilliseconds
    ) {
        $period = new Millisecond($millisecond);

        $this->assertSame(0, $period->years());
        $this->assertSame(0, $period->months());
        $this->assertSame($days, $period->days());
        $this->assertSame($hours, $period->hours());
        $this->assertSame($minutes, $period->minutes());
        $this->assertSame($seconds, $period->seconds());
        $this->assertSame($expectedMilliseconds, $period->milliseconds());
    }

    /**
     * @expectedException Innmind\TimeContinuum\Exception\PeriodCantBeNegativeException
     */
    public function testThrowWhenMillisecondIsNegative()
    {
        new Millisecond(-1);
    }

    public function testEquals()
    {
        $this->assertTrue((new Millisecond(66))->equals(new Millisecond(66)));
        $this->assertFalse((new Millisecond(2))->equals(new Millisecond(3)));
    }

    public function testAdd()
    {
        $period = new Millisecond(20);
        $period2 = $period->add($period);

        $this->assertInstanceOf(PeriodInterface::class, $period2);
        $this->assertSame(0, $period->years());
        $this->assertSame(0, $period->months());
        $this->assertSame(0, $period->days());
        $this->assertSame(0, $period->hours());
        $this->assertSame(0, $period->minutes());
        $this->assertSame(0, $period->seconds());
        $this->assertSame(20, $period->milliseconds());
        $this->assertSame(0, $period2->years());
        $this->assertSame(0, $period2->months());
        $this->assertSame(0, $period2->days());
        $this->assertSame(0, $period2->hours());
        $this->assertSame(0, $period2->minutes());
        $this->assertSame(0, $period2->seconds());
        $this->assertSame(40, $period2->milliseconds());
    }

    public function cases()
    {
        return [
            [20, 0, 0, 0, 0, 20],
            [1000, 0, 0, 0, 1, 0],
            [1001, 0, 0, 0, 1, 1],
            [2000, 0, 0, 0, 2, 0],
            [2001, 0, 0, 0, 2, 1],
            [2001, 0, 0, 0, 2, 1],
            [60000, 0, 0, 1, 0, 0],
            [60001, 0, 0, 1, 0, 1],
            [61001, 0, 0, 1, 1, 1],
            [120000, 0, 0, 2, 0, 0],
            [120001, 0, 0, 2, 0, 1],
            [121001, 0, 0, 2, 1, 1],
            [3600000, 0, 1, 0, 0, 0],
            [3600001, 0, 1, 0, 0, 1],
            [3601001, 0, 1, 0, 1, 1],
            [3660000, 0, 1, 1, 0, 0],
            [3660001, 0, 1, 1, 0, 1],
            [3661001, 0, 1, 1, 1, 1],
            [86400000, 1, 0, 0, 0, 0],
            [86400001, 1, 0, 0, 0, 1],
            [86401001, 1, 0, 0, 1, 1],
            [86461001, 1, 0, 1, 1, 1],
            [90061001, 1, 1, 1, 1, 1],
        ];
    }
}
