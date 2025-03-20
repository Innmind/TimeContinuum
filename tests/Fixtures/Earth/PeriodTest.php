<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Fixtures\Earth;

use Fixtures\Innmind\TimeContinuum\Earth\Period;
use Innmind\BlackBox\{
    Set,
    Random,
};
use Innmind\TimeContinuum\{
    Period as PeriodInterface,
    Earth\Period\Year,
};
use PHPUnit\Framework\TestCase;

class PeriodTest extends TestCase
{
    public function testAny()
    {
        $periods = Period::any();

        $this->assertInstanceOf(Set::class, $periods);
        $this->assertCount(100, \iterator_to_array($periods->values(Random::default)));

        foreach ($periods->values(Random::default) as $period) {
            $this->assertInstanceOf(Set\Value::class, $period);
            $this->assertInstanceOf(PeriodInterface::class, $period->unwrap());
            if (\interface_exists(Set\Implementation::class)) {
                $this->assertTrue($period->immutable());
            } else {
                $this->assertTrue($period->isImmutable());
            }
        }
    }

    public function testAnyNumberOfYear()
    {
        $periods = Period::anyNumberOfYear();

        $this->assertInstanceOf(Set::class, $periods);
        $this->assertCount(100, \iterator_to_array($periods->values(Random::default)));

        $periods = $periods->values(Random::default);
        $generated = [];

        foreach ($periods as $period) {
            $this->assertInstanceOf(Set\Value::class, $period);
            if (\interface_exists(Set\Implementation::class)) {
                $this->assertTrue($period->immutable());
            } else {
                $this->assertTrue($period->isImmutable());
            }
            $value = $period->unwrap();
            $this->assertInstanceOf(Year::class, $value);
            $this->assertSame(0, $value->months());
            $this->assertSame(0, $value->days());
            $this->assertSame(0, $value->hours());
            $this->assertSame(0, $value->minutes());
            $this->assertSame(0, $value->seconds());
            $this->assertSame(0, $value->milliseconds());

            $generated[] = $value->years();
        }

        $this->assertGreaterThan(90, \count(\array_unique($generated)));
    }

    public function testLessThanAYear()
    {
        $periods = Period::lessThanAYear();

        $this->assertInstanceOf(Set::class, $periods);
        $this->assertCount(100, \iterator_to_array($periods->values(Random::default)));

        $periods = $periods->values(Random::default);
        $unique = [];

        foreach ($periods as $period) {
            $this->assertInstanceOf(Set\Value::class, $period);
            if (\interface_exists(Set\Implementation::class)) {
                $this->assertTrue($period->immutable());
            } else {
                $this->assertTrue($period->isImmutable());
            }
            $value = $period->unwrap();
            $this->assertInstanceOf(PeriodInterface::class, $value);
            $this->assertLessThan(365, $value->days());
            $this->assertSame(0, $value->years());
            $this->assertSame(0, $value->months());
            $generated = [
                $value->days(),
                $value->hours(),
                $value->minutes(),
                $value->seconds(),
                $value->milliseconds(),
            ];

            if (!\in_array($generated, $unique, true)) {
                $unique[] = $generated;
            }
        }

        $this->assertGreaterThan(90, \count($unique));
    }
}
