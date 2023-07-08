<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Period;

use Innmind\TimeContinuum\{
    Earth\Period\Composite,
    Period,
    Exception\PeriodCantBeNegative,
};
use PHPUnit\Framework\TestCase;

class CompositeTest extends TestCase
{
    public function testInterface()
    {
        $period = new Composite(1, 2, 3, 4, 5, 6, 7);

        $this->assertInstanceOf(Period::class, $period);
        $this->assertSame(1, $period->years());
        $this->assertSame(2, $period->months());
        $this->assertSame(3, $period->days());
        $this->assertSame(4, $period->hours());
        $this->assertSame(5, $period->minutes());
        $this->assertSame(6, $period->seconds());
        $this->assertSame(7, $period->milliseconds());
    }

    public function testAdjustEachComponent()
    {
        $period = new Composite(
            1,
            13,
            1,
            49,
            2880,
            90061,
            90061001,
        );

        $this->assertSame(2, $period->years());
        $this->assertSame(1, $period->months());
        $this->assertSame(7, $period->days());
        $this->assertSame(3, $period->hours());
        $this->assertSame(2, $period->minutes());
        $this->assertSame(2, $period->seconds());
        $this->assertSame(1, $period->milliseconds());
    }

    /**
     * @dataProvider wrongData
     */
    public function testThrowWhenAComponentIsNegative(
        int $year,
        int $month,
        int $day,
        int $hour,
        int $minute,
        int $second,
        int $millisecond,
    ) {
        $this->expectException(PeriodCantBeNegative::class);
        $this->expectExceptionMessage('-1');

        new Composite($year, $month, $day, $hour, $minute, $second, $millisecond);
    }

    public function testEquals()
    {
        $period = new Composite(1, 2, 3, 4, 5, 6, 7);
        $period2 = new Composite(1, 2, 3, 4, 5, 6, 8);
        $period3 = new Composite(1, 2, 3, 4, 5, 6, 7);

        $this->assertTrue($period->equals($period3));
        $this->assertFalse($period->equals($period2));
    }

    public function testAdd()
    {
        $period = new Composite(1, 2, 3, 4, 5, 6, 7);
        $period2 = $period->add($period);

        $this->assertInstanceOf(Period::class, $period);
        $this->assertNotSame($period, $period2);
        $this->assertSame(1, $period->years());
        $this->assertSame(2, $period->months());
        $this->assertSame(3, $period->days());
        $this->assertSame(4, $period->hours());
        $this->assertSame(5, $period->minutes());
        $this->assertSame(6, $period->seconds());
        $this->assertSame(7, $period->milliseconds());
        $this->assertSame(2, $period2->years());
        $this->assertSame(4, $period2->months());
        $this->assertSame(6, $period2->days());
        $this->assertSame(8, $period2->hours());
        $this->assertSame(10, $period2->minutes());
        $this->assertSame(12, $period2->seconds());
        $this->assertSame(14, $period2->milliseconds());
    }

    public function testAsElapsedPeriod()
    {
        $this->assertSame(
            90_061_001,
            (new Composite(0, 0, 1, 1, 1, 1, 1))->asElapsedPeriod()->milliseconds(),
        );
    }

    public static function wrongData()
    {
        return [
            [-1, 0, 0, 0, 0, 0, 0],
            [0, -1, 0, 0, 0, 0, 0],
            [0, 0, -1, 0, 0, 0, 0],
            [0, 0, 0, -1, 0, 0, 0],
            [0, 0, 0, 0, -1, 0, 0],
            [0, 0, 0, 0, 0, -1, 0],
            [0, 0, 0, 0, 0, 0, -1],
        ];
    }
}
