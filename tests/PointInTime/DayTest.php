<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\PointInTime;

use Innmind\TimeContinuum\{
    PointInTime\Day,
    PointInTime\Month,
    PointInTime\Year,
};
use PHPUnit\Framework\TestCase;

class DayTest extends TestCase
{
    public function testInterface()
    {
        $day = Day::of($year = Year::of(2016), Month::of($year, 10), 5);

        $this->assertSame(3, $day->weekNumber());
        $this->assertSame(278, $day->ofYear());
        $this->assertSame(24, $day->numberOfHours());
        $this->assertSame(5, $day->toInt());
        $this->assertSame('Wednesday', $day->toString());
    }
}