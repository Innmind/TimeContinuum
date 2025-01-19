<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\PointInTime;

use Innmind\TimeContinuum\PointInTime\Month;
use Innmind\BlackBox\PHPUnit\Framework\TestCase;

class MonthTest extends TestCase
{
    public function testInterface()
    {
        $month = Month::of(new \DateTimeImmutable('2016-10-01T00:00:00'));

        $this->assertSame(31, $month->numberOfDays());
        $this->assertSame(10, $month->ofYear()->toInt());
        $this->assertSame('october', $month->ofYear()->name);
    }
}
