<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum;

use Innmind\TimeContinuum\ElapsedPeriod;

class ElapsedPeriodTest extends \PHPUnit_Framework_TestCase
{
    public function testInterface()
    {
        $period = new ElapsedPeriod(42);

        $this->assertSame(42, $period->milliseconds());
    }

    /**
     * @expectedException Innmind\TimeContinuum\Exception\ElapsedPeriodCantBeNegativeException
     */
    public function testThrowWhenTryingToBuildANegativePeriod()
    {
        new ElapsedPeriod(-42);
    }

    public function testLongerThan()
    {
        $this->assertTrue(
            (new ElapsedPeriod(42))->longerThan(
                new ElapsedPeriod(0)
            )
        );
        $this->assertFalse(
            (new ElapsedPeriod(42))->longerThan(
                new ElapsedPeriod(66)
            )
        );
    }
}
