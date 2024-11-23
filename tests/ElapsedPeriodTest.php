<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum;

use Innmind\TimeContinuum\{
    ElapsedPeriod,
    Period,
};
use Innmind\BlackBox\PHPUnit\Framework\TestCase;

class ElapsedPeriodTest extends TestCase
{
    public function testInterface()
    {
        $period = ElapsedPeriod::of(42);

        $this->assertSame(0, $period->milliseconds());
        $this->assertSame(42, $period->microseconds());

        $period = ElapsedPeriod::of(42_000);

        $this->assertSame(42, $period->milliseconds());
        $this->assertSame(42_000, $period->microseconds());
    }

    public function testThrowWhenTryingToBuildANegativePeriod()
    {
        $this->expectException(\RuntimeException::class);
        $this->expectExceptionMessage('-42');

        ElapsedPeriod::of(-42);
    }

    public function testLongerThan()
    {
        $this->assertTrue(
            ElapsedPeriod::of(42)->longerThan(
                ElapsedPeriod::of(0),
            ),
        );
        $this->assertFalse(
            ElapsedPeriod::of(42)->longerThan(
                ElapsedPeriod::of(66),
            ),
        );
    }

    public function testEquals()
    {
        $this->assertTrue(
            ElapsedPeriod::of(42)->equals(
                ElapsedPeriod::of(42),
            ),
        );
        $this->assertFalse(
            ElapsedPeriod::of(42)->equals(
                ElapsedPeriod::of(66),
            ),
        );
    }

    public function testThrowWhenTryingToBuildFromYearPeriod()
    {
        $this->expectException(\LogicException::class);

        ElapsedPeriod::ofPeriod(Period::year(1));
    }

    public function testThrowWhenTryingToBuildFromMonthPeriod()
    {
        $this->expectException(\LogicException::class);

        ElapsedPeriod::ofPeriod(Period::month(1));
    }
}
