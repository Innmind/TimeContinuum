<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth;

use Innmind\TimeContinuum\{
    Earth\ElapsedPeriod,
    Earth\Period\Year,
    Earth\Period\Month,
    Exception\ElapsedPeriodCantBeNegative,
    Exception\LogicException,
};
use PHPUnit\Framework\TestCase;

class ElapsedPeriodTest extends TestCase
{
    public function testInterface()
    {
        $period = new ElapsedPeriod(42);

        $this->assertSame(42, $period->milliseconds());
    }

    public function testThrowWhenTryingToBuildANegativePeriod()
    {
        $this->expectException(ElapsedPeriodCantBeNegative::class);
        $this->expectExceptionMessage('-42');

        new ElapsedPeriod(-42);
    }

    public function testMaybe()
    {
        $this->assertInstanceOf(ElapsedPeriod::class, ElapsedPeriod::maybe(42)->match(
            static fn($period) => $period,
            static fn() => null,
        ));
        $this->assertNull(ElapsedPeriod::maybe(-42)->match(
            static fn($period) => $period,
            static fn() => null,
        ));
    }

    public function testOf()
    {
        $this->assertInstanceOf(ElapsedPeriod::class, ElapsedPeriod::of(42));

        $this->expectException(ElapsedPeriodCantBeNegative::class);
        $this->expectExceptionMessage('-42');

        ElapsedPeriod::of(-42);
    }

    public function testLongerThan()
    {
        $this->assertTrue(
            (new ElapsedPeriod(42))->longerThan(
                new ElapsedPeriod(0),
            ),
        );
        $this->assertFalse(
            (new ElapsedPeriod(42))->longerThan(
                new ElapsedPeriod(66),
            ),
        );
    }

    public function testEquals()
    {
        $this->assertTrue(
            (new ElapsedPeriod(42))->equals(
                new ElapsedPeriod(42),
            ),
        );
        $this->assertFalse(
            (new ElapsedPeriod(42))->equals(
                new ElapsedPeriod(66),
            ),
        );
    }

    public function testThrowWhenTryingToBuildFromYearPeriod()
    {
        $this->expectException(LogicException::class);

        ElapsedPeriod::ofPeriod(new Year(1));
    }

    public function testThrowWhenTryingToBuildFromMonthPeriod()
    {
        $this->expectException(LogicException::class);

        ElapsedPeriod::ofPeriod(new Month(1));
    }
}
