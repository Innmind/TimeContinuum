<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\PointInTime;

use Innmind\TimeContinuum\PointInTime\HighResolution;
use PHPUnit\Framework\TestCase;

class HighResolutionTest extends TestCase
{
    public function testDiffWithinSameSecond()
    {
        $started = HighResolution::of(1, 1_000_000);
        $end = HighResolution::of(1, 2_000_000);

        $this->assertSame(1, $end->elapsedSince($started)->milliseconds());
    }

    public function testDiffLessThanOneSecondButNotInSameSecond()
    {
        $started = HighResolution::of(1, 2_000_000);
        $end = HighResolution::of(2, 1_000_000);

        $this->assertSame(999, $end->elapsedSince($started)->milliseconds());
    }

    public function testDiffMoreThanOneSecond()
    {
        $started = HighResolution::of(1, 2_000_000);
        $end = HighResolution::of(2, 3_000_000);

        $this->assertSame(1001, $end->elapsedSince($started)->milliseconds());
    }

    public function testDiffMoreThanMultipleSeconds()
    {
        $started = HighResolution::of(1, 2_000_000);
        $end = HighResolution::of(3, 3_000_000);

        $this->assertSame(2001, $end->elapsedSince($started)->milliseconds());
    }

    public function testDiffMoreThanMultipleSeconds2()
    {
        $started = HighResolution::of(1, 2_000_000);
        $end = HighResolution::of(3, 1_000_000);

        $this->assertSame(1999, $end->elapsedSince($started)->milliseconds());
    }

    public function test1()
    {
        $started = HighResolution::of(684461, 547614375);
        $end = HighResolution::of(684462, 602541);

        $this->assertSame(453, $end->elapsedSince($started)->milliseconds());
    }
}
