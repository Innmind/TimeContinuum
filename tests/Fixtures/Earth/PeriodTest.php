<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Fixtures\Earth;

use Fixtures\Innmind\TimeContinuum\Earth\Period;
use Innmind\BlackBox\Set;
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
        $this->assertCount(100, \iterator_to_array($periods->values()));

        foreach ($periods->values() as $period) {
            $this->assertInstanceOf(Set\Value::class, $period);
            $this->assertInstanceOf(PeriodInterface::class, $period->unwrap());
            $this->assertTrue($period->isImmutable());
        }
    }

    public function testAnyNumberOfYear()
    {
        $periods = Period::anyNumberOfYear();

        $this->assertInstanceOf(Set::class, $periods);
        $this->assertCount(100, \iterator_to_array($periods->values()));

        $periods = $periods->values();
        $previous = $periods->current()->unwrap();
        $periods->next();

        while ($periods->valid()) {
            $period = $periods->current();

            $this->assertInstanceOf(Set\Value::class, $period);
            $this->assertTrue($period->isImmutable());
            $value = $period->unwrap();
            $this->assertInstanceOf(Year::class, $value);
            $this->assertNotSame($previous->years(), $value->years());
            $this->assertSame(0, $value->months());
            $this->assertSame(0, $value->days());
            $this->assertSame(0, $value->hours());
            $this->assertSame(0, $value->minutes());
            $this->assertSame(0, $value->seconds());
            $this->assertSame(0, $value->milliseconds());

            $periods->next();
            $previous = $value;
        }
    }

    public function testLessThanAYear()
    {
        $periods = Period::lessThanAYear();

        $this->assertInstanceOf(Set::class, $periods);
        $this->assertCount(100, \iterator_to_array($periods->values()));

        $periods = $periods->values();
        $previous = $periods->current()->unwrap();
        $periods->next();

        while ($periods->valid()) {
            $period = $periods->current();

            $this->assertInstanceOf(Set\Value::class, $period);
            $this->assertTrue($period->isImmutable());
            $value = $period->unwrap();
            $this->assertInstanceOf(PeriodInterface::class, $value);
            $this->assertLessThan(365, $value->days());
            $this->assertSame(0, $value->years());
            $this->assertSame(0, $value->months());
            $this->assertNotSame(
                [
                    $previous->days(),
                    $previous->hours(),
                    $previous->minutes(),
                    $previous->seconds(),
                    $previous->milliseconds(),
                ],
                [
                    $value->days(),
                    $value->hours(),
                    $value->minutes(),
                    $value->seconds(),
                    $value->milliseconds(),
                ],
            );

            $periods->next();
            $previous = $value;
        }
    }
}
