<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Fixtures\Earth;

use Fixtures\Innmind\TimeContinuum\Earth\PointInTime;
use Innmind\BlackBox\{
    Set,
    Random,
};
use Innmind\TimeContinuum\{
    PointInTime as PointInTimeInterface,
    Earth\Format\ISO8601,
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
            if (\interface_exists(Set\Implementation::class)) {
                $this->assertTrue($pointInTime->immutable());
            } else {
                $this->assertTrue($pointInTime->isImmutable());
            }
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
                $point->unwrap()->format(new ISO8601),
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
                $point->unwrap()->format(new ISO8601),
            );
        }
    }
}
