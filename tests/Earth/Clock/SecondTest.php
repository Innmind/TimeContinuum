<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Clock;

use Innmind\TimeContinuum\{
    Earth\Clock\Second,
    Clock\Second as SecondInterface,
    Exception\DomainException,
};
use PHPUnit\Framework\TestCase;

class SecondTest extends TestCase
{
    public function testInterface()
    {
        $second = new Second(13);

        $this->assertInstanceOf(SecondInterface::class, $second);
        $this->assertSame(13, $second->toInt());
        $this->assertSame('13', $second->toString());
    }

    public function testThrowWhenSecondTooLow()
    {
        $this->expectException(DomainException::class);
        $this->expectExceptionMessage('-1');

        new Second(-1);
    }

    public function testThrowWhenSecondTooHigh()
    {
        $this->expectException(DomainException::class);
        $this->expectExceptionMessage('60');

        new Second(60);
    }
}
