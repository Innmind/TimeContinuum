<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Period;

use Innmind\TimeContinuum\Period;
use Innmind\BlackBox\PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Attributes\DataProvider;

class MonthTest extends TestCase
{
    public function testInterface()
    {
        $period = Period::month(10);

        $this->assertInstanceOf(Period::class, $period);
        $this->assertSame(0, $period->years());
        $this->assertSame(10, $period->months());
        $this->assertSame(0, $period->days());
        $this->assertSame(0, $period->hours());
        $this->assertSame(0, $period->minutes());
        $this->assertSame(0, $period->seconds());
        $this->assertSame(0, $period->milliseconds());
    }

    #[DataProvider('cases')]
    public function testConvertMonthsIntoYears(int $months, int $year, int $expectedMonths)
    {
        $period = Period::month($months);

        $this->assertSame($year, $period->years());
        $this->assertSame($expectedMonths, $period->months());
        $this->assertSame(0, $period->days());
        $this->assertSame(0, $period->hours());
        $this->assertSame(0, $period->minutes());
        $this->assertSame(0, $period->seconds());
        $this->assertSame(0, $period->milliseconds());
    }

    public function testEquals()
    {
        $this->assertTrue(Period::month(20)->equals(Period::month(20)));
        $this->assertFalse(Period::month(2)->equals(Period::month(3)));
    }

    public function testAdd()
    {
        $period = Period::month(10);
        $period2 = $period->add($period);

        $this->assertInstanceOf(Period::class, $period2);
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

    public static function cases()
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
