<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Clock;

use Innmind\TimeContinuum\{
    Earth\Clock\Hour,
    Clock\Hour as HourInterface,
    Exception\DomainException,
};
use PHPUnit\Framework\TestCase;

class HourTest extends TestCase
{
    public function testInterface()
    {
        $hour = new Hour(13);

        $this->assertInstanceOf(HourInterface::class, $hour);
        $this->assertSame(13, $hour->toInt());
        $this->assertSame('13', $hour->toString());
    }

    public function testThrowWhenHourTooLow()
    {
        $this->expectException(DomainException::class);
        $this->expectExceptionMessage('-1');

        new Hour(-1);
    }

    public function testThrowWhenHourTooHigh()
    {
        $this->expectException(DomainException::class);
        $this->expectExceptionMessage('24');

        new Hour(24);
    }
}
