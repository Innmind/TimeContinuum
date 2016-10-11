<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\TimeContinuum\Earth;

use Innmind\TimeContinuum\TimeContinuum\{
    Earth\Minute,
    MinuteInterface
};

class MinuteTest extends \PHPUnit_Framework_TestCase
{
    public function testInterface()
    {
        $minute = new Minute(13);

        $this->assertInstanceOf(MinuteInterface::class, $minute);
        $this->assertSame(13, $minute->toInt());
        $this->assertSame('13', (string) $minute);
    }

    /**
     * @expectedException Innmind\TimeContinuum\Exception\InvalidArgumentException
     */
    public function testThrowWhenMinuteTooLow()
    {
        new Minute(-1);
    }

    /**
     * @expectedException Innmind\TimeContinuum\Exception\InvalidArgumentException
     */
    public function testThrowWhenMinuteTooHigh()
    {
        new Minute(60);
    }
}
