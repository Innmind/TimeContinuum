<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Period;

use Innmind\TimeContinuum\{
    Period,
    Earth\Period\Minute,
    Exception\PeriodCantBeNegative,
};
use PHPUnit\Framework\TestCase;

class MinuteTest extends TestCase
{
    public function testInterface()
    {
        $period = new Minute(20);

        $this->assertInstanceOf(Period::class, $period);
        $this->assertSame(0, $period->years());
        $this->assertSame(0, $period->months());
        $this->assertSame(0, $period->days());
        $this->assertSame(0, $period->hours());
        $this->assertSame(20, $period->minutes());
        $this->assertSame(0, $period->seconds());
        $this->assertSame(0, $period->milliseconds());
    }

    /**
     * @dataProvider cases
     */
    public function testConvertToHours(
        int $minute,
        int $days,
        int $hours,
        int $expectedMinutes,
    ) {
        $period = new Minute($minute);

        $this->assertSame(0, $period->years());
        $this->assertSame(0, $period->months());
        $this->assertSame($days, $period->days());
        $this->assertSame($hours, $period->hours());
        $this->assertSame($expectedMinutes, $period->minutes());
        $this->assertSame(0, $period->seconds());
        $this->assertSame(0, $period->milliseconds());
    }

    public function testThrowWhenMinuteIsNegative()
    {
        $this->expectException(PeriodCantBeNegative::class);
        $this->expectExceptionMessage('-1');

        new Minute(-1);
    }

    public function testEquals()
    {
        $this->assertTrue((new Minute(66))->equals(new Minute(66)));
        $this->assertFalse((new Minute(2))->equals(new Minute(3)));
    }

    public function testAdd()
    {
        $period = new Minute(20);
        $period2 = $period->add($period);

        $this->assertInstanceOf(Period::class, $period2);
        $this->assertSame(0, $period->years());
        $this->assertSame(0, $period->months());
        $this->assertSame(0, $period->days());
        $this->assertSame(0, $period->hours());
        $this->assertSame(20, $period->minutes());
        $this->assertSame(0, $period->seconds());
        $this->assertSame(0, $period->milliseconds());
        $this->assertSame(0, $period2->years());
        $this->assertSame(0, $period2->months());
        $this->assertSame(0, $period2->days());
        $this->assertSame(0, $period2->hours());
        $this->assertSame(40, $period2->minutes());
        $this->assertSame(0, $period2->seconds());
        $this->assertSame(0, $period2->milliseconds());
    }

    public function testAsElapsedPeriod()
    {
        $this->assertSame(
            60_000,
            (new Minute(1))->asElapsedPeriod()->milliseconds(),
        );
        $this->assertSame(
            120_000,
            (new Minute(2))->asElapsedPeriod()->milliseconds(),
        );
        $this->assertSame(
            180_000,
            (new Minute(3))->asElapsedPeriod()->milliseconds(),
        );
    }

    public function cases()
    {
        return [
            [20, 0, 0, 20],
            [59, 0, 0, 59],
            [60, 0, 1, 0],
            [61, 0, 1, 1],
            [120, 0, 2, 0],
            [121, 0, 2, 1],
            [1440, 1, 0, 0],
            [1441, 1, 0, 1],
            [1501, 1, 1, 1],
            [2880, 2, 0, 0],
        ];
    }
}
