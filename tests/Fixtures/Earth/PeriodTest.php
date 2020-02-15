<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Fixtures\Earth;

use Fixtures\Innmind\TimeContinuum\Earth\Period;
use Innmind\BlackBox\Set;
use Innmind\TimeContinuum\Period as PeriodInterface;
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
}
