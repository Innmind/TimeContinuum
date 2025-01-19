<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\PointInTime;

use Innmind\TimeContinuum\PointInTime\Day;
use Innmind\BlackBox\PHPUnit\Framework\TestCase;

class DayTest extends TestCase
{
    public function testInterface()
    {
        $day = Day::of(new \DateTimeImmutable('2016-10-05T00:00:00'));

        $this->assertSame(3, $day->ofWeek()->toInt());
        $this->assertSame(278, $day->ofYear());
        $this->assertSame(24, $day->numberOfHours());
        $this->assertSame(5, $day->ofMonth());
        $this->assertSame('wednesday', $day->ofWeek()->name);
    }
}
