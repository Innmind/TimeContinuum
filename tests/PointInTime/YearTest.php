<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\PointInTime;

use Innmind\TimeContinuum\PointInTime\Year;
use PHPUnit\Framework\TestCase;

class YearTest extends TestCase
{
    public function testInterface()
    {
        $year = Year::of(2016);

        $this->assertSame(366, $year->numberOfDays());
        $this->assertSame(12, $year->numberOfMonths());
        $this->assertSame(2016, $year->toInt());
        $this->assertSame('2016', $year->toString());

        $this->assertSame(365, Year::of(2017)->numberOfDays());
    }
}
