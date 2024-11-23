<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Period;

use Innmind\TimeContinuum\{
    Period,
    Period\Day,
};
use Innmind\BlackBox\PHPUnit\Framework\TestCase;

class DayTest extends TestCase
{
    public function testInterface()
    {
        $period = Day::of(1000);

        $this->assertInstanceOf(Period::class, $period);
        $this->assertSame(0, $period->years());
        $this->assertSame(0, $period->months());
        $this->assertSame(1000, $period->days());
        $this->assertSame(0, $period->hours());
        $this->assertSame(0, $period->minutes());
        $this->assertSame(0, $period->seconds());
        $this->assertSame(0, $period->milliseconds());
    }

    public function testEquals()
    {
        $this->assertTrue(Day::of(2)->equals(Day::of(2)));
        $this->assertFalse(Day::of(2)->equals(Day::of(3)));
    }

    public function testAdd()
    {
        $period = Day::of(1000);
        $period2 = $period->add($period);

        $this->assertInstanceOf(Period::class, $period);
        $this->assertNotSame($period, $period2);
        $this->assertSame(0, $period->years());
        $this->assertSame(0, $period->months());
        $this->assertSame(1000, $period->days());
        $this->assertSame(0, $period->hours());
        $this->assertSame(0, $period->minutes());
        $this->assertSame(0, $period->seconds());
        $this->assertSame(0, $period->milliseconds());
        $this->assertSame(0, $period2->years());
        $this->assertSame(0, $period2->months());
        $this->assertSame(2000, $period2->days());
        $this->assertSame(0, $period2->hours());
        $this->assertSame(0, $period2->minutes());
        $this->assertSame(0, $period2->seconds());
        $this->assertSame(0, $period2->milliseconds());
    }

    public function testAsElapsedPeriod()
    {
        $this->assertSame(
            86_400_000,
            Day::of(1)->asElapsedPeriod()->milliseconds(),
        );
        $this->assertSame(
            172_800_000,
            Day::of(2)->asElapsedPeriod()->milliseconds(),
        );
        $this->assertSame(
            259_200_000,
            Day::of(3)->asElapsedPeriod()->milliseconds(),
        );
    }
}
