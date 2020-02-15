<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth;

use Innmind\TimeContinuum\{
    Earth\FrozenClock,
    Earth\Format\ISO8601,
    Clock,
    PointInTime as PointInTimeInterface,
};
use Fixtures\Innmind\TimeContinuum\Earth\PointInTime;
use PHPUnit\Framework\TestCase;
use Innmind\BlackBox\{
    PHPUnit\BlackBox,
    Set,
};

class FrozenClockTest extends TestCase
{
    use BlackBox;

    public function testInterface()
    {
        $this
            ->forAll(PointInTime::any())
            ->then(function($now) {
                $this->assertInstanceOf(Clock::class, new FrozenClock($now));
            });
    }

    public function testNow()
    {
        $this
            ->forAll(PointInTime::any())
            ->then(function($now) {
                $this->assertSame($now, (new FrozenClock($now))->now());
            });
    }

    public function testAtReturnWithTheSameTimezoneAsNow()
    {
        $this
            ->forAll(
                PointInTime::any(),
                PointInTime::any(),
            )
            ->then(function($now, $at) {
                $clock = new FrozenClock($now);

                $point = $clock->at($at->format(new ISO8601));

                $this->assertInstanceOf(PointInTimeInterface::class, $point);
                $this->assertSame($now->timezone()->toString(), $point->timezone()->toString());
            });
    }
}
