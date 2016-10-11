<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\TimeContinuum\Earth;

use Innmind\TimeContinuum\TimeContinuum\{
    Earth\Millisecond,
    MillisecondInterface
};

class MillisecondTest extends \PHPUnit_Framework_TestCase
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
