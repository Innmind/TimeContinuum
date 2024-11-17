<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Clock;

use Innmind\TimeContinuum\{
    Clock\Month,
    Clock\Year,
};
use PHPUnit\Framework\TestCase;

class MonthTest extends TestCase
{
    public function testInterface()
    {
        $month = Month::of(Year::of(2016), 10);

        $this->assertSame(31, $month->numberOfDays());
        $this->assertSame(10, $month->toInt());
        $this->assertSame('October', $month->toString());
    }
}
