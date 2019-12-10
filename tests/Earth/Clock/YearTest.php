<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Clock;

use Innmind\TimeContinuum\{
    Earth\Clock\Year,
    Clock\Year as YearInterface,
};
use PHPUnit\Framework\TestCase;

class YearTest extends TestCase
{
    public function testInterface()
    {
        $year = new Year(2016);

        $this->assertInstanceOf(YearInterface::class, $year);
        $this->assertSame(366, $year->numberOfDays());
        $this->assertSame(12, $year->numberOfMonths());
        $this->assertSame(2016, $year->toInt());
        $this->assertSame('2016', $year->toString());

        $this->assertSame(365, (new Year(2017))->numberOfDays());
    }
}
