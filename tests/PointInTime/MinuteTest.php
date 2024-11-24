<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\PointInTime;

use Innmind\TimeContinuum\PointInTime\Minute;
use Innmind\BlackBox\PHPUnit\Framework\TestCase;

class MinuteTest extends TestCase
{
    public function testInterface()
    {
        $minute = Minute::of(13);

        $this->assertSame(60, $minute->numberOfSeconds());
        $this->assertSame(13, $minute->toInt());
    }
}
