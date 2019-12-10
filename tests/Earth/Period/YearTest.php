<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Period;

use Innmind\TimeContinuum\{
    Period,
    Earth\Period\Year,
    Exception\PeriodCantBeNegative,
};
use PHPUnit\Framework\TestCase;

class YearTest extends TestCase
{
    public function testInterface()
    {
        $period = new Year(42);

        $this->assertInstanceOf(Period::class, $period);
        $this->assertSame(42, $period->years());
        $this->assertSame(0, $period->months());
        $this->assertSame(0, $period->days());
        $this->assertSame(0, $period->hours());
        $this->assertSame(0, $period->minutes());
        $this->assertSame(0, $period->seconds());
        $this->assertSame(0, $period->milliseconds());
    }

    public function testThrowWhenYearIsNegative()
    {
        $this->expectException(PeriodCantBeNegative::class);
        $this->expectExceptionMessage('-1');

        new Year(-1);
    }

    public function testEquals()
    {
        $this->assertTrue((new Year(2))->equals(new Year(2)));
        $this->assertFalse((new Year(2))->equals(new Year(3)));
    }

    public function testAdd()
    {
        $period = new Year(42);
        $period2 = $period->add($period);

        $this->assertInstanceOf(Period::class, $period2);
        $this->assertSame(42, $period->years());
        $this->assertSame(0, $period->months());
        $this->assertSame(0, $period->days());
        $this->assertSame(0, $period->hours());
        $this->assertSame(0, $period->minutes());
        $this->assertSame(0, $period->seconds());
        $this->assertSame(0, $period->milliseconds());
        $this->assertSame(84, $period2->years());
        $this->assertSame(0, $period2->months());
        $this->assertSame(0, $period2->days());
        $this->assertSame(0, $period2->hours());
        $this->assertSame(0, $period2->minutes());
        $this->assertSame(0, $period2->seconds());
        $this->assertSame(0, $period2->milliseconds());
    }
}
