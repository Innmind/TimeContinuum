<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Period;

use Innmind\TimeContinuum\Period;
use Innmind\BlackBox\PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Attributes\DataProvider;

class HourTest extends TestCase
{
    public function testInterface()
    {
        $period = Period::hour(20);

        $this->assertInstanceOf(Period::class, $period);
        $this->assertSame(0, $period->years());
        $this->assertSame(0, $period->months());
        $this->assertSame(0, $period->days());
        $this->assertSame(20, $period->hours());
        $this->assertSame(0, $period->minutes());
        $this->assertSame(0, $period->seconds());
        $this->assertSame(0, $period->milliseconds());
    }

    #[DataProvider('cases')]
    public function testConvertToDays(int $hour, int $days, int $expectedHours)
    {
        $period = Period::hour($hour);

        $this->assertSame(0, $period->years());
        $this->assertSame(0, $period->months());
        $this->assertSame($days, $period->days());
        $this->assertSame($expectedHours, $period->hours());
        $this->assertSame(0, $period->minutes());
        $this->assertSame(0, $period->seconds());
        $this->assertSame(0, $period->milliseconds());
    }

    public function testEquals()
    {
        $this->assertTrue(Period::hour(25)->equals(Period::hour(25)));
        $this->assertFalse(Period::hour(2)->equals(Period::hour(3)));
    }

    public function testAdd()
    {
        $period = Period::hour(20);
        $period2 = $period->add($period);

        $this->assertInstanceOf(Period::class, $period2);
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

    public function testAsElapsedPeriod()
    {
        $this->assertSame(
            3_600_000,
            Period::hour(1)->asElapsedPeriod()->milliseconds(),
        );
        $this->assertSame(
            7_200_000,
            Period::hour(2)->asElapsedPeriod()->milliseconds(),
        );
        $this->assertSame(
            10_800_000,
            Period::hour(3)->asElapsedPeriod()->milliseconds(),
        );
    }

    public static function cases()
    {
        return [
            [20, 0, 20],
            [24, 1, 0],
            [23, 0, 23],
            [25, 1, 1],
            [48, 2, 0],
            [49, 2, 1],
        ];
    }
}
