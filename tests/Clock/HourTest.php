<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Clock;

use Innmind\TimeContinuum\Clock\Hour;
use PHPUnit\Framework\TestCase;

class HourTest extends TestCase
{
    public function testInterface()
    {
        $hour = Hour::of(13);

        $this->assertSame(60, $hour->numberOfMinutes());
        $this->assertSame(13, $hour->toInt());
        $this->assertSame('13', $hour->toString());
    }
}
