<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\PointInTime;

use Innmind\TimeContinuum\{
    PointInTime\Day,
    PointInTime\Month,
    PointInTime\Year,
    Calendar,
};
use Innmind\BlackBox\PHPUnit\Framework\TestCase;

class DayTest extends TestCase
{
    public function testInterface()
    {
        $day = Day::of(
            $year = Year::of(2016),
            Month::of(
                $year,
                Calendar\Month::of(10),
            ),
            5,
        );

        $this->assertSame(3, $day->ofWeek()->toInt());
        $this->assertSame(278, $day->ofYear());
        $this->assertSame(24, $day->numberOfHours());
        $this->assertSame(5, $day->ofMonth());
        $this->assertSame('wednesday', $day->ofWeek()->name);
    }
}
