<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\PointInTime;

use Innmind\TimeContinuum\{
    Earth\PointInTime\Now,
    PointInTime,
    Timezone,
    Format,
    Earth\ElapsedPeriod,
    Clock\Year as YearInterface,
    Clock\Month,
    Clock\Day,
    Clock\Hour,
    Clock\Minute,
    Clock\Second,
    Clock\Millisecond,
    Earth\Timezone\UTC,
    Earth\Period\Composite,
    Earth\Period\Year,
    Earth\Period\Millisecond as MillisecondPeriod,
};
use PHPUnit\Framework\TestCase;

class NowTest extends TestCase
{
    public function testInterface()
    {
        $time = microtime(true);
        $timestamp = (int) $time;
        //off by one due to the time it takes to reach microtime in Now::__construct
        $now = (int) ($time * 1000);
        $point = new Now;

        $this->assertInstanceOf(PointInTime::class, $point);
        $this->assertInstanceOf(YearInterface::class, $point->year());
        $this->assertInstanceOf(Month::class, $point->month());
        $this->assertInstanceOf(Day::class, $point->day());
        $this->assertInstanceOf(Hour::class, $point->hour());
        $this->assertInstanceOf(Minute::class, $point->minute());
        $this->assertInstanceOf(Second::class, $point->second());
        $this->assertInstanceOf(Millisecond::class, $point->millisecond());
        $this->assertInstanceOf(Timezone::class, $point->timezone());
        $this->assertSame((int) date('Y', $timestamp), $point->year()->toInt());
        $this->assertSame((int) date('m', $timestamp), $point->month()->toInt());
        $this->assertSame((int) date('d', $timestamp), $point->day()->toInt());
        $this->assertSame((int) date('H', $timestamp), $point->hour()->toInt());
        $this->assertSame((int) date('i', $timestamp), $point->minute()->toInt());
        $this->assertSame((int) date('s', $timestamp), $point->second()->toInt());
        //allow 50 milliseconds delay between our microtime
        //and the one in Now::__construct
        $this->assertTrue($point->millisecond()->toInt() >= $now - ($timestamp * 1000));
        $this->assertTrue($point->millisecond()->toInt() <= $now - ($timestamp * 1000) + 50);
        $this->assertTrue($point->milliseconds() >= $now);
        $this->assertTrue($point->milliseconds() <= $now + 50);
        $timezone = date('P', $timestamp);
        $timezone = $timezone === '+00:00' ? 'Z' : $timezone;
        $this->assertSame($timezone, $point->timezone()->toString());
        $this->assertSame(date('Y-m-d\TH:i:sP', $timestamp), $point->toString());
    }

    public function testFormat()
    {
        $point = new Now;

        $this->assertSame(
            date('H:i:s d/m/Y'),
            $point->format(
                new class implements Format
                {
                    public function toString(): string
                    {
                        return 'H:i:s d/m/Y';
                    }
                }
            )
        );
    }

    public function testChangeTimezone()
    {
        $now = new \DateTime;
        $now->setTimezone(new \DateTimeZone('-02:30'));
        $point = new Now;
        $point2 = $point->changeTimezone(new UTC(-2, 30));

        $this->assertInstanceOf(PointInTime::class, $point2);
        $this->assertNotSame($point, $point2);
        $this->assertNotSame($point->year(), $point2->year());
        $this->assertNotSame($point->month(), $point2->month());
        $this->assertNotSame($point->day(), $point2->day());
        $this->assertNotSame($point->hour(), $point2->hour());
        $this->assertNotSame($point->minute(), $point2->minute());
        $this->assertNotSame($point->second(), $point2->second());
        $this->assertNotSame($point->millisecond(), $point2->millisecond());
        $this->assertSame($point->milliseconds(), $point2->milliseconds());
        $this->assertSame((int) $now->format('Y'), $point2->year()->toInt());
        $this->assertSame((int) $now->format('m'), $point2->month()->toInt());
        $this->assertSame((int) $now->format('d'), $point2->day()->toInt());
        $this->assertSame((int) $now->format('H'), $point2->hour()->toInt());
        $this->assertSame((int) $now->format('i'), $point2->minute()->toInt());
        $this->assertSame((int) $now->format('s'), $point2->second()->toInt());
        $this->assertSame('-02:30', $point2->timezone()->toString());
    }

    public function testElapsedSince()
    {
        $point = new Now;
        sleep(1);
        $point2 = new Now;
        $elapsed = $point2->elapsedSince($point);

        $this->assertInstanceOf(ElapsedPeriod::class, $elapsed);
        //make sure there's at least 1 second elapsed due to the sleep()
        $this->assertTrue(1000 <= $elapsed->milliseconds());
    }

    public function testAheadOf()
    {
        $point = new Now;
        sleep(1);
        $point2 = new Now;

        $this->assertTrue($point2->aheadOf($point));
        $this->assertFalse($point->aheadOf($point2));
    }

    public function testEquals()
    {
        $point = new Now;
        sleep(1);
        $point2 = new Now;
        $point3 = clone $point;

        $this->assertTrue($point->equals($point3));
        $this->assertFalse($point->equals($point2));
    }

    public function testGoForward()
    {
        $point = new Now;
        $point2 = $point->goForward(new Year(1));

        $this->assertInstanceOf(PointInTime::class, $point2);
        $this->assertNotSame($point, $point2);
        $this->assertSame($point->year()->toInt() + 1, $point2->year()->toInt());
    }

    public function testGoBack()
    {
        $point = new Now;
        $point2 = $point->goBack(new Year(1));

        $this->assertInstanceOf(PointInTime::class, $point2);
        $this->assertNotSame($point, $point2);
        $this->assertSame($point->year()->toInt() - 1, $point2->year()->toInt());

        $point3 = $point->goBack(new MillisecondPeriod(500));

        if ($point->millisecond()->toInt() > 500) {
            $this->assertSame(
                $point->millisecond()->toInt() - 500,
                $point3->millisecond()->toInt()
            );
        } else {
            $this->assertSame(
                1000 - abs($point->millisecond()->toInt() - 500),
                $point3->millisecond()->toInt()
            );
            $this->assertSame(
                $point->second()->toInt() === 0 ?
                    59 : $point->second()->toInt() - 1,
                $point3->second()->toInt()
            );
        }
    }
}
