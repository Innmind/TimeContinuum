<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Period;

use Innmind\TimeContinuum\{
    Period,
    Earth\Period\Second,
    Exception\PeriodCantBeNegative,
};
use PHPUnit\Framework\TestCase;

class SecondTest extends TestCase
{
    public function testInterface()
    {
        $period = new Second(20);

        $this->assertInstanceOf(Period::class, $period);
        $this->assertSame(0, $period->years());
        $this->assertSame(0, $period->months());
        $this->assertSame(0, $period->days());
        $this->assertSame(0, $period->hours());
        $this->assertSame(0, $period->minutes());
        $this->assertSame(20, $period->seconds());
        $this->assertSame(0, $period->milliseconds());
    }

    /**
     * @dataProvider cases
     */
    public function testConvertToMinutes(
        int $second,
        int $days,
        int $hours,
        int $minutes,
        int $expectedSeconds,
    ) {
        $period = new Second($second);

        $this->assertSame(0, $period->years());
        $this->assertSame(0, $period->months());
        $this->assertSame($days, $period->days());
        $this->assertSame($hours, $period->hours());
        $this->assertSame($minutes, $period->minutes());
        $this->assertSame($expectedSeconds, $period->seconds());
        $this->assertSame(0, $period->milliseconds());
    }

    public function testThrowWhenSecondIsNegative()
    {
        $this->expectException(PeriodCantBeNegative::class);
        $this->expectExceptionMessage('-1');

        new Second(-1);
    }

    public function testEquals()
    {
        $this->assertTrue((new Second(66))->equals(new Second(66)));
        $this->assertFalse((new Second(2))->equals(new Second(3)));
    }

    public function testAdd()
    {
        $period = new Second(20);
        $period2 = $period->add($period);

        $this->assertInstanceOf(Period::class, $period2);
        $this->assertSame(0, $period->years());
        $this->assertSame(0, $period->months());
        $this->assertSame(0, $period->days());
        $this->assertSame(0, $period->hours());
        $this->assertSame(0, $period->minutes());
        $this->assertSame(20, $period->seconds());
        $this->assertSame(0, $period->milliseconds());
        $this->assertSame(0, $period2->years());
        $this->assertSame(0, $period2->months());
        $this->assertSame(0, $period2->days());
        $this->assertSame(0, $period2->hours());
        $this->assertSame(0, $period2->minutes());
        $this->assertSame(40, $period2->seconds());
        $this->assertSame(0, $period2->milliseconds());
    }

    public function testAsElapsedPeriod()
    {
        $this->assertSame(
            1000,
            (new Second(1))->asElapsedPeriod()->milliseconds(),
        );
        $this->assertSame(
            2000,
            (new Second(2))->asElapsedPeriod()->milliseconds(),
        );
        $this->assertSame(
            3000,
            (new Second(3))->asElapsedPeriod()->milliseconds(),
        );
    }

    public function cases()
    {
        return [
            [20, 0, 0, 0, 20],
            [60, 0, 0, 1, 0],
            [61, 0, 0, 1, 1],
            [120, 0, 0, 2, 0],
            [121, 0, 0, 2, 1],
            [3600, 0, 1, 0, 0],
            [3601, 0, 1, 0, 1],
            [7200, 0, 2, 0, 0],
            [7201, 0, 2, 0, 1],
            [7261, 0, 2, 1, 1],
            [86400, 1, 0, 0, 0],
            [86401, 1, 0, 0, 1],
            [86461, 1, 0, 1, 1],
            [90000, 1, 1, 0, 0],
            [90001, 1, 1, 0, 1],
            [90061, 1, 1, 1, 1],
        ];
    }
}
