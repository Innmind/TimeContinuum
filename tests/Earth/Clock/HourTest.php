<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Clock;

use Innmind\TimeContinuum\{
    Earth\Clock\Hour,
    Clock\Hour as HourInterface,
};
use PHPUnit\Framework\TestCase;

class HourTest extends TestCase
{
    public function testInterface()
    {
        $hour = new Hour(13);

        $this->assertInstanceOf(HourInterface::class, $hour);
        $this->assertSame(13, $hour->toInt());
        $this->assertSame('13', (string) $hour);
    }

    /**
     * @expectedException Innmind\TimeContinuum\Exception\InvalidArgumentException
     */
    public function testThrowWhenHourTooLow()
    {
        new Hour(-1);
    }

    /**
     * @expectedException Innmind\TimeContinuum\Exception\InvalidArgumentException
     */
    public function testThrowWhenHourTooHigh()
    {
        new Hour(24);
    }
}
