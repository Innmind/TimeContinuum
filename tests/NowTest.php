<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum;

use Innmind\TimeContinuum\{
    PointInTime,
    Offset,
    Format,
    ElapsedPeriod,
    PointInTime\Year,
    PointInTime\Month,
    PointInTime\Day,
    PointInTime\Hour,
    PointInTime\Minute,
    PointInTime\Second,
    PointInTime\Millisecond,
    Period,
};
use Innmind\BlackBox\PHPUnit\Framework\TestCase;

class NowTest extends TestCase
{
    public function testInterface()
    {
        $time = \microtime(true);
        $timestamp = (int) $time;
        //off by one due to the time it takes to reach microtime in Now::__construct
        $now = (int) ($time * 1000);
        $point = PointInTime::now();

        $this->assertInstanceOf(Year::class, $point->year());
        $this->assertInstanceOf(Month::class, $point->month());
        $this->assertInstanceOf(Day::class, $point->day());
        $this->assertInstanceOf(Hour::class, $point->hour());
        $this->assertInstanceOf(Minute::class, $point->minute());
        $this->assertInstanceOf(Second::class, $point->second());
        $this->assertInstanceOf(Millisecond::class, $point->millisecond());
        $this->assertInstanceOf(Offset::class, $point->offset());
        $this->assertSame((int) \date('Y', $timestamp), $point->year()->toInt());
        $this->assertSame((int) \date('m', $timestamp), $point->month()->ofYear()->toInt());
        $this->assertSame((int) \date('d', $timestamp), $point->day()->ofMonth());
        $this->assertSame((int) \date('H', $timestamp), $point->hour()->toInt());
        $this->assertSame((int) \date('i', $timestamp), $point->minute()->toInt());
        $this->assertSame((int) \date('s', $timestamp), $point->second()->toInt());
        //allow 50 milliseconds delay between our microtime
        //and the one in Now::__construct
        $this->assertTrue($point->millisecond()->toInt() >= $now - ($timestamp * 1000));
        $this->assertTrue($point->millisecond()->toInt() <= $now - ($timestamp * 1000) + 50);
        $timezone = \date('P', $timestamp);
        $timezone = $timezone === '+00:00' ? 'Z' : $timezone;
        $this->assertSame($timezone, $point->offset()->toString());
    }

    public function testFormat()
    {
        $point = PointInTime::now();

        $this->assertSame(
            \date('H:i:s d/m/Y'),
            $point->format(Format::of('H:i:s d/m/Y')),
        );
    }

    public function testChangeOffset()
    {
        $now = new \DateTimeImmutable;
        $now = $now->setTimezone(new \DateTimeZone('-02:30'));
        $point = PointInTime::now();
        $point2 = $point->changeOffset(Offset::minus(2, 30));

        $this->assertNotSame($point, $point2);
        $this->assertNotSame($point->year(), $point2->year());
        $this->assertNotSame($point->month(), $point2->month());
        $this->assertNotSame($point->day(), $point2->day());
        $this->assertNotSame($point->hour(), $point2->hour());
        $this->assertNotSame($point->minute(), $point2->minute());
        $this->assertNotSame($point->second(), $point2->second());
        $this->assertNotSame($point->millisecond(), $point2->millisecond());
        $this->assertSame((int) $now->format('Y'), $point2->year()->toInt());
        $this->assertSame((int) $now->format('m'), $point2->month()->ofYear()->toInt());
        $this->assertSame((int) $now->format('d'), $point2->day()->ofMonth());
        $this->assertSame((int) $now->format('H'), $point2->hour()->toInt());
        $this->assertSame((int) $now->format('i'), $point2->minute()->toInt());
        $this->assertSame((int) $now->format('s'), $point2->second()->toInt());
        $this->assertSame('-02:30', $point2->offset()->toString());
    }

    public function testElapsedSince()
    {
        $point = PointInTime::now();
        \sleep(1);
        $point2 = PointInTime::now();
        $elapsed = $point2->elapsedSince($point);

        $this->assertInstanceOf(ElapsedPeriod::class, $elapsed);
        //make sure there's at least 1 second elapsed due to the sleep()
        $this->assertTrue(
            $elapsed->longerThan(
                Period::second(1)->asElapsedPeriod(),
            ),
        );
    }

    public function testAheadOf()
    {
        $point = PointInTime::now();
        \sleep(1);
        $point2 = PointInTime::now();

        $this->assertTrue(
            $point2->aheadOf($point),
            $point->format(Format::of('Y-m-d\TH:i:s.uP')).' '.$point2->format(Format::of('Y-m-d\TH:i:s.uP')),
        );
        $this->assertFalse(
            $point->aheadOf($point2),
            $point->format(Format::of('Y-m-d\TH:i:s.uP')).' '.$point2->format(Format::of('Y-m-d\TH:i:s.uP')),
        );
    }

    public function testEquals()
    {
        $point = PointInTime::now();
        \sleep(1);
        $point2 = PointInTime::now();
        $point3 = clone $point;

        $this->assertTrue($point->equals($point3));
        $this->assertFalse($point->equals($point2));
    }

    public function testGoForward()
    {
        $point = PointInTime::now();
        $point2 = $point->goForward(Period::year(1));

        $this->assertNotSame($point, $point2);
        $this->assertSame($point->year()->toInt() + 1, $point2->year()->toInt());
    }

    public function testGoBack()
    {
        $point = PointInTime::now();
        $point2 = $point->goBack(Period::year(1));

        $this->assertNotSame($point, $point2);
        $this->assertSame($point->year()->toInt() - 1, $point2->year()->toInt());

        $point3 = $point->goBack(Period::millisecond(500));

        if ($point->millisecond()->toInt() > 500) {
            $this->assertSame(
                $point->millisecond()->toInt() - 500,
                $point3->millisecond()->toInt(),
            );
        } else {
            $this->assertSame(
                1000 - \abs($point->millisecond()->toInt() - 500),
                $point3->millisecond()->toInt(),
            );
            $this->assertSame(
                $point->second()->toInt() === 0 ?
                    59 : $point->second()->toInt() - 1,
                $point3->second()->toInt(),
            );
        }
    }
}
