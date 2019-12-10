<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Clock;

use Innmind\TimeContinuum\{
    Earth\Clock\Minute,
    Clock\MinuteInterface,
};
use PHPUnit\Framework\TestCase;

class MinuteTest extends TestCase
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
