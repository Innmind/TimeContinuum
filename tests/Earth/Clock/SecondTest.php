<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Clock;

use Innmind\TimeContinuum\{
    Earth\Clock\Second,
    Clock\Second as SecondInterface,
};
use PHPUnit\Framework\TestCase;

class SecondTest extends TestCase
{
    public function testInterface()
    {
        $second = new Second(13);

        $this->assertInstanceOf(SecondInterface::class, $second);
        $this->assertSame(13, $second->toInt());
        $this->assertSame('13', (string) $second);
    }

    /**
     * @expectedException Innmind\TimeContinuum\Exception\InvalidArgumentException
     */
    public function testThrowWhenSecondTooLow()
    {
        new Second(-1);
    }

    /**
     * @expectedException Innmind\TimeContinuum\Exception\InvalidArgumentException
     */
    public function testThrowWhenSecondTooHigh()
    {
        new Second(60);
    }
}
