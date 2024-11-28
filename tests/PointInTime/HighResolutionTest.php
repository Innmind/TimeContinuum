<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\PointInTime;

use Innmind\TimeContinuum\PointInTime\HighResolution;
use Innmind\BlackBox\PHPUnit\Framework\TestCase;

class HighResolutionTest extends TestCase
{
    public function testDiffWithinSameSecond()
    {
        $started = HighResolution::of(1, 1_000_000);
        $end = HighResolution::of(1, 2_000_000);

        $period = $end->elapsedSince($started)->asPeriod();
        $this->assertSame(0, $period->seconds());
        $this->assertSame(1, $period->milliseconds());
        $this->assertSame(0, $period->microseconds());
    }

    public function testDiffLessThanOneSecondButNotInSameSecond()
    {
        $started = HighResolution::of(1, 2_000_000);
        $end = HighResolution::of(2, 1_000_000);

        $period = $end->elapsedSince($started)->asPeriod();
        $this->assertSame(0, $period->seconds());
        $this->assertSame(999, $period->milliseconds());
        $this->assertSame(0, $period->microseconds());
    }

    public function testDiffMoreThanOneSecond()
    {
        $started = HighResolution::of(1, 2_000_000);
        $end = HighResolution::of(2, 3_000_000);

        $period = $end->elapsedSince($started)->asPeriod();
        $this->assertSame(1, $period->seconds());
        $this->assertSame(1, $period->milliseconds());
        $this->assertSame(0, $period->microseconds());
    }

    public function testDiffMoreThanMultipleSeconds()
    {
        $started = HighResolution::of(1, 2_000_000);
        $end = HighResolution::of(3, 3_000_000);

        $period = $end->elapsedSince($started)->asPeriod();
        $this->assertSame(2, $period->seconds());
        $this->assertSame(1, $period->milliseconds());
        $this->assertSame(0, $period->microseconds());
    }

    public function testDiffMoreThanMultipleSeconds2()
    {
        $started = HighResolution::of(1, 2_000_000);
        $end = HighResolution::of(3, 1_000_000);

        $period = $end->elapsedSince($started)->asPeriod();
        $this->assertSame(1, $period->seconds());
        $this->assertSame(999, $period->milliseconds());
        $this->assertSame(0, $period->microseconds());
    }

    public function test1()
    {
        $started = HighResolution::of(684461, 547614375);
        $end = HighResolution::of(684462, 602541);

        $period = $end->elapsedSince($started)->asPeriod();
        $this->assertSame(452, $period->milliseconds());
        $this->assertSame(988, $period->microseconds());
    }
}
