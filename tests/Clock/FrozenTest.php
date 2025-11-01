<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Clock;

use Innmind\TimeContinuum\{
    Clock,
    Format,
    PointInTime as PointInTimeInterface,
};
use Fixtures\Innmind\TimeContinuum\PointInTime;
use Innmind\BlackBox\{
    PHPUnit\Framework\TestCase,
    PHPUnit\BlackBox,
};

class FrozenTest extends TestCase
{
    use BlackBox;

    public function testNow(): BlackBox\Proof
    {
        return $this
            ->forAll(PointInTime::any())
            ->prove(function($now) {
                $this->assertSame(
                    $now->toString(),
                    Clock::frozen($now)->now()->toString(),
                );
            });
    }

    public function testAtReturnWithTheSameTimezoneAsNow(): BlackBox\Proof
    {
        return $this
            ->forAll(
                PointInTime::any(),
                PointInTime::any(),
            )
            ->prove(function($now, $at) {
                $clock = Clock::frozen($now);

                $point = $clock->at($at->format(Format::iso8601()), Format::iso8601())->match(
                    static fn($point) => $point,
                    static fn() => null,
                );

                $this->assertInstanceOf(PointInTimeInterface::class, $point);
                $this->assertSame($now->offset()->toString(), $point->offset()->toString());
            });
    }
}
