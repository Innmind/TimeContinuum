<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\TimeContinuum;

use Innmind\TimeContinuum\{
    Earth\TimeContinuum\Millisecond,
    TimeContinuum\MillisecondInterface,
};
use PHPUnit\Framework\TestCase;

class MillisecondTest extends TestCase
{
    public function testInterface()
    {
        $millisecond = new Millisecond(600);

        $this->assertInstanceOf(MillisecondInterface::class, $millisecond);
        $this->assertSame(600, $millisecond->toInt());
        $this->assertSame('600', (string) $millisecond);
    }

    /**
     * @expectedException Innmind\TimeContinuum\Exception\InvalidArgumentException
     */
    public function testThrowWhenMillisecondTooLow()
    {
        new Millisecond(-1);
    }

    /**
     * @expectedException Innmind\TimeContinuum\Exception\InvalidArgumentException
     */
    public function testThrowWhenMillisecondTooHigh()
    {
        new Millisecond(1000);
    }
}
