<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Clock;

use Innmind\TimeContinuum\Clock\Millisecond;
use PHPUnit\Framework\TestCase;

class MillisecondTest extends TestCase
{
    public function testInterface()
    {
        $millisecond = Millisecond::of(600);

        $this->assertSame(600, $millisecond->toInt());
        $this->assertSame('600', $millisecond->toString());
    }
}
