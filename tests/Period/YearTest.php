<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Period;

use Innmind\TimeContinuum\Period;
use Innmind\BlackBox\PHPUnit\Framework\TestCase;

class YearTest extends TestCase
{
    public function testInterface()
    {
        $period = Period::year(42);

        $this->assertInstanceOf(Period::class, $period);
        $this->assertSame(42, $period->years());
        $this->assertSame(0, $period->months());
        $this->assertSame(0, $period->days());
        $this->assertSame(0, $period->hours());
        $this->assertSame(0, $period->minutes());
        $this->assertSame(0, $period->seconds());
        $this->assertSame(0, $period->milliseconds());
    }

    public function testEquals()
    {
        $this->assertTrue(Period::year(2)->equals(Period::year(2)));
        $this->assertFalse(Period::year(2)->equals(Period::year(3)));
    }

    public function testAdd()
    {
        $period = Period::year(42);
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
