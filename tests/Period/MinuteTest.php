<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Period;

use Innmind\TimeContinuum\Period;
use Innmind\BlackBox\PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Attributes\DataProvider;

class MinuteTest extends TestCase
{
    public function testInterface()
    {
        $period = Period::minute(20);

        $this->assertInstanceOf(Period::class, $period);
        $this->assertSame(0, $period->years());
        $this->assertSame(0, $period->months());
        $this->assertSame(0, $period->days());
        $this->assertSame(0, $period->hours());
        $this->assertSame(20, $period->minutes());
        $this->assertSame(0, $period->seconds());
        $this->assertSame(0, $period->milliseconds());
    }

    #[DataProvider('cases')]
    public function testConvertToHours(
        int $minute,
        int $days,
        int $hours,
        int $expectedMinutes,
    ) {
        $period = Period::minute($minute);

        $this->assertSame(0, $period->years());
        $this->assertSame(0, $period->months());
        $this->assertSame($days, $period->days());
        $this->assertSame($hours, $period->hours());
        $this->assertSame($expectedMinutes, $period->minutes());
        $this->assertSame(0, $period->seconds());
        $this->assertSame(0, $period->milliseconds());
    }

    public function testEquals()
    {
        $this->assertTrue(Period::minute(66)->equals(Period::minute(66)));
        $this->assertFalse(Period::minute(2)->equals(Period::minute(3)));
    }

    public function testAdd()
    {
        $period = Period::minute(20);
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
            Period::minute(1)->asElapsedPeriod()->milliseconds(),
        );
        $this->assertSame(
            120_000,
            Period::minute(2)->asElapsedPeriod()->milliseconds(),
        );
        $this->assertSame(
            180_000,
            Period::minute(3)->asElapsedPeriod()->milliseconds(),
        );
    }

    public static function cases()
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
