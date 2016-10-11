<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\PointInTime\Earth;

use Innmind\TimeContinuum\{
    PointInTime\Earth\Now,
    PointInTimeInterface,
    TimezoneInterface,
    FormatInterface,
    ElapsedPeriod,
    TimeContinuum\YearInterface,
    TimeContinuum\MonthInterface,
    TimeContinuum\DayInterface,
    TimeContinuum\HourInterface,
    TimeContinuum\MinuteInterface,
    TimeContinuum\SecondInterface,
    TimeContinuum\MillisecondInterface,
    Timezone\Earth\UTC,
    Period\Earth\Composite,
    Period\Earth\Year,
    Period\Earth\Millisecond as MillisecondPeriod
};

class NowTest extends \PHPUnit_Framework_TestCase
{
    public function testInterface()
    {
        $time = microtime(true);
        $timestamp = (int) $time;
        //off by one due to the time it takes to reach microtime in Now::__construct
        $now = (int) round($time * 1000);
        $point = new Now;

        $this->assertInstanceOf(PointInTimeInterface::class, $point);
        $this->assertInstanceOf(YearInterface::class, $point->year());
        $this->assertInstanceOf(MonthInterface::class, $point->month());
        $this->assertInstanceOf(DayInterface::class, $point->day());
        $this->assertInstanceOf(HourInterface::class, $point->hour());
        $this->assertInstanceOf(MinuteInterface::class, $point->minute());
        $this->assertInstanceOf(SecondInterface::class, $point->second());
        $this->assertInstanceOf(MillisecondInterface::class, $point->millisecond());
        $this->assertInstanceOf(TimezoneInterface::class, $point->timezone());
        $this->assertSame($point->year(), $point->year());
        $this->assertSame($point->month(), $point->month());
        $this->assertSame($point->day(), $point->day());
        $this->assertSame($point->hour(), $point->hour());
        $this->assertSame($point->minute(), $point->minute());
        $this->assertSame($point->second(), $point->second());
        $this->assertSame($point->millisecond(), $point->millisecond());
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
        $this->assertSame($timezone, (string) $point->timezone());
        $this->assertSame(date('Y-m-d\TH:i:sP', $timestamp), (string) $point);
    }

    public function testFormat()
    {
        $point = new Now;

        $this->assertSame(
            date('H:i:s d/m/Y'),
            $point->format(
                new class implements FormatInterface
                {
                    public function __toString(): string
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

        $this->assertInstanceOf(PointInTimeInterface::class, $point2);
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
        $this->assertSame('-02:30', (string) $point2->timezone());
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

        $this->assertInstanceOf(PointInTimeInterface::class, $point2);
        $this->assertNotSame($point, $point2);
        $this->assertSame($point->year()->toInt() + 1, $point2->year()->toInt());
    }

    public function testGoBack()
    {
        $point = new Now;
        $point2 = $point->goBack(new Year(1));

        $this->assertInstanceOf(PointInTimeInterface::class, $point2);
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
