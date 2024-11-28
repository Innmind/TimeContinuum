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
        $period = ElapsedPeriod::of(0, 0, 42);

        $this->assertTrue(
            $period->equals(
                Period::microsecond(42)->asElapsedPeriod(),
            ),
        );

        $period = ElapsedPeriod::of(0, 42, 0);

        $this->assertTrue(
            $period->equals(
                Period::millisecond(42)->asElapsedPeriod(),
            ),
        );

        $period = ElapsedPeriod::of(42, 0, 0);

        $this->assertTrue(
            $period->equals(
                Period::second(42)->asElapsedPeriod(),
            ),
        );
    }

    public function testLongerThan()
    {
        $this->assertTrue(
            ElapsedPeriod::of(0, 0, 42)->longerThan(
                ElapsedPeriod::of(0, 0, 0),
            ),
        );
        $this->assertFalse(
            ElapsedPeriod::of(0, 0, 42)->longerThan(
                ElapsedPeriod::of(0, 0, 66),
            ),
        );
    }

    public function testEquals()
    {
        $this->assertTrue(
            ElapsedPeriod::of(0, 0, 42)->equals(
                ElapsedPeriod::of(0, 0, 42),
            ),
        );
        $this->assertFalse(
            ElapsedPeriod::of(0, 0, 42)->equals(
                ElapsedPeriod::of(0, 0, 66),
            ),
        );
    }

    public function testThrowWhenTryingToBuildFromYearPeriod()
    {
        $this->expectException(\LogicException::class);

        Period::year(1)->asElapsedPeriod();
    }

    public function testThrowWhenTryingToBuildFromMonthPeriod()
    {
        $this->expectException(\LogicException::class);

        Period::month(1)->asElapsedPeriod();
    }
}
