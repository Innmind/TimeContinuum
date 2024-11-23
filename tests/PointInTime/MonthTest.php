<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\PointInTime;

use Innmind\TimeContinuum\{
    PointInTime\Month,
    PointInTime\Year,
    Calendar,
};
use PHPUnit\Framework\TestCase;

class MonthTest extends TestCase
{
    public function testInterface()
    {
        $month = Month::of(Year::of(2016), Calendar\Month::of(10));

        $this->assertSame(31, $month->numberOfDays());
        $this->assertSame(10, $month->ofYear()->toInt());
        $this->assertSame('october', $month->ofYear()->name);
    }
}
