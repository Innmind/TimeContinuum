<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Fixtures;

use Fixtures\Innmind\TimeContinuum\PointInTime;
use Innmind\BlackBox\{
    Set,
    Random,
};
use Innmind\TimeContinuum\{
    PointInTime as PointInTimeInterface,
    Format,
};
use PHPUnit\Framework\TestCase;

class PointInTimeTest extends TestCase
{
    public function testAny()
    {
        $pointsInTime = PointInTime::any();

        $this->assertInstanceOf(Set::class, $pointsInTime);
        $this->assertCount(100, \iterator_to_array($pointsInTime->values(Random::default)));

        foreach ($pointsInTime->values(Random::default) as $pointInTime) {
            $this->assertInstanceOf(Set\Value::class, $pointInTime);
            $this->assertInstanceOf(PointInTimeInterface::class, $pointInTime->unwrap());
            $this->assertTrue($pointInTime->isImmutable());
        }
    }

    public function testAfter()
    {
        $points = PointInTime::after('1970-01-01T12:13:14+02:00');

        $this->assertInstanceOf(Set::class, $points);
        $this->assertCount(100, \iterator_to_array($points->values(Random::default)));

        foreach ($points->values(Random::default) as $point) {
            $this->assertGreaterThanOrEqual(
                '1970-01-01T12:13:14+02:00',
                $point->unwrap()->format(Format::iso8601()),
            );
        }
    }

    public function testBefore()
    {
        $points = PointInTime::before('1970-01-01T12:13:14+02:00');

        $this->assertInstanceOf(Set::class, $points);
        $this->assertCount(100, \iterator_to_array($points->values(Random::default)));

        foreach ($points->values(Random::default) as $point) {
            $this->assertLessThanOrEqual(
                '1970-01-01T12:13:14+02:00',
                $point->unwrap()->format(Format::iso8601()),
            );
        }
    }
}