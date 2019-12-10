<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Clock;

use Innmind\TimeContinuum\{
    Earth\Clock\Millisecond,
    Clock\Millisecond as MillisecondInterface,
    Exception\InvalidArgumentException,
};
use PHPUnit\Framework\TestCase;

class MillisecondTest extends TestCase
{
    public function testInterface()
    {
        $millisecond = new Millisecond(600);

        $this->assertInstanceOf(MillisecondInterface::class, $millisecond);
        $this->assertSame(600, $millisecond->toInt());
        $this->assertSame('600', $millisecond->toString());
    }

    public function testThrowWhenMillisecondTooLow()
    {
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('-1');

        new Millisecond(-1);
    }

    public function testThrowWhenMillisecondTooHigh()
    {
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('00');

        new Millisecond(1000);
    }
}
