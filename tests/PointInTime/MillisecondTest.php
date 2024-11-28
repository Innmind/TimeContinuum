<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\PointInTime;

use Innmind\TimeContinuum\PointInTime\Millisecond;
use Innmind\BlackBox\PHPUnit\Framework\TestCase;

class MillisecondTest extends TestCase
{
    public function testInterface()
    {
        $millisecond = Millisecond::of(600);

        $this->assertSame(600, $millisecond->toInt());
    }
}
