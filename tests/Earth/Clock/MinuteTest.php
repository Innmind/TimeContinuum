<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Clock;

use Innmind\TimeContinuum\{
    Earth\Clock\Minute,
    Clock\Minute as MinuteInterface,
    Exception\DomainException,
};
use PHPUnit\Framework\TestCase;

class MinuteTest extends TestCase
{
    public function testInterface()
    {
        $minute = new Minute(13);

        $this->assertInstanceOf(MinuteInterface::class, $minute);
        $this->assertSame(13, $minute->toInt());
        $this->assertSame('13', $minute->toString());
    }

    public function testThrowWhenMinuteTooLow()
    {
        $this->expectException(DomainException::class);
        $this->expectExceptionMessage('-1');

        new Minute(-1);
    }

    public function testThrowWhenMinuteTooHigh()
    {
        $this->expectException(DomainException::class);
        $this->expectExceptionMessage('60');

        new Minute(60);
    }
}
