<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum;

use Innmind\TimeContinuum\{
    PointInTime,
    Timezone,
    Format,
    ElapsedPeriod,
    PointInTime\Year,
    PointInTime\Month,
    PointInTime\Day as DayInterface,
    PointInTime\Hour,
    PointInTime\Minute,
    PointInTime\Second,
    PointInTime\Millisecond,
    Period,
    Period\Day,
};
use PHPUnit\Framework\TestCase;

class PointInTimeTest extends TestCase
{
    public function testInterface()
    {
        $point = PointInTime::at('2016-10-05T08:01:30.123+02:00');

        $this->assertInstanceOf(Year::class, $point->year());
        $this->assertInstanceOf(Month::class, $point->month());
        $this->assertInstanceOf(DayInterface::class, $point->day());
        $this->assertInstanceOf(Hour::class, $point->hour());
        $this->assertInstanceOf(Minute::class, $point->minute());
        $this->assertInstanceOf(Second::class, $point->second());
        $this->assertInstanceOf(Millisecond::class, $point->millisecond());
        $this->assertInstanceOf(Timezone::class, $point->timezone());
        $this->assertSame(2016, $point->year()->toInt());
        $this->assertSame(10, $point->month()->toInt());
        $this->assertSame(5, $point->day()->toInt());
        $this->assertSame(8, $point->hour()->toInt());
        $this->assertSame(1, $point->minute()->toInt());
        $this->assertSame(30, $point->second()->toInt());
        $this->assertSame(123, $point->millisecond()->toInt());
        $this->assertSame(
            (new \DateTimeImmutable('2016-10-05T08:01:30.123+02:00'))->getTimestamp() * 1000 + $point->millisecond()->toInt(),
            $point->milliseconds(),
        );
        $this->assertSame('+02:00', $point->timezone()->toString());
        $this->assertSame('2016-10-05T08:01:30+02:00', $point->toString());
    }

    public function testPreserveMillisecondsWhenNanosecondsInString()
    {
        $point = PointInTime::at('2016-10-05T08:01:30.999678+02:00');

        $this->assertSame(999, $point->millisecond()->toInt());
        $this->assertSame(30, $point->second()->toInt());
    }

    public function testFormat()
    {
        $point = PointInTime::at('2016-10-05T08:01:30.123+02:00');

        $this->assertSame(
            '08:01:30 05/10/2016',
            $point->format(Format::of('H:i:s d/m/Y')),
        );
    }

    public function testChangeTimezone()
    {
        $point = PointInTime::at('2016-10-05T08:01:30.123+02:00');
        $point2 = $point->changeTimezone(Timezone::of(-2, 30));

        $this->assertNotSame($point, $point2);
        $this->assertNotSame($point->year(), $point2->year());
        $this->assertNotSame($point->month(), $point2->month());
        $this->assertNotSame($point->day(), $point2->day());
        $this->assertNotSame($point->hour(), $point2->hour());
        $this->assertNotSame($point->minute(), $point2->minute());
        $this->assertNotSame($point->second(), $point2->second());
        $this->assertNotSame($point->millisecond(), $point2->millisecond());
        $this->assertSame($point->milliseconds(), $point2->milliseconds());
        $this->assertSame(2016, $point2->year()->toInt());
        $this->assertSame(10, $point2->month()->toInt());
        $this->assertSame(5, $point2->day()->toInt());
        $this->assertSame(3, $point2->hour()->toInt());
        $this->assertSame(31, $point2->minute()->toInt());
        $this->assertSame(30, $point2->second()->toInt());
        $this->assertSame(123, $point2->millisecond()->toInt());
        $this->assertSame('-02:30', $point2->timezone()->toString());
    }

    public function testElapsedSince()
    {
        $point = PointInTime::at('2016-10-05T08:01:30.123+02:00');
        $point2 = PointInTime::at('2016-10-05T08:03:30.234+02:00');
        $elapsed = $point2->elapsedSince($point);

        $this->assertInstanceOf(ElapsedPeriod::class, $elapsed);
        $this->assertSame(120111, $elapsed->milliseconds());
    }

    public function testAheadOf()
    {
        $point = PointInTime::at('2016-10-05T08:01:30.123+02:00');
        $point2 = PointInTime::at('2016-10-05T08:03:30.234+02:00');

        $this->assertTrue($point2->aheadOf($point));
        $this->assertFalse($point->aheadOf($point2));
    }

    public function testEquals()
    {
        $point = PointInTime::at('2016-10-05T08:01:30.123+02:00');
        $point2 = PointInTime::at('2016-10-05T08:03:30.234+02:00');
        $point3 = PointInTime::at('2016-10-05T08:01:30.123+02:00');

        $this->assertTrue($point->equals($point3));
        $this->assertFalse($point->equals($point2));
    }

    public function testGoForward()
    {
        $point = PointInTime::at('2016-10-05T08:01:30.123+02:00');
        $point2 = $point->goForward(
            Period::of(1, 1, 1, 1, 1, 30, 878),
        );

        $this->assertSame(2016, $point->year()->toInt());
        $this->assertSame(10, $point->month()->toInt());
        $this->assertSame(5, $point->day()->toInt());
        $this->assertSame(8, $point->hour()->toInt());
        $this->assertSame(1, $point->minute()->toInt());
        $this->assertSame(30, $point->second()->toInt());
        $this->assertSame(123, $point->millisecond()->toInt());
        $this->assertSame(2017, $point2->year()->toInt());
        $this->assertSame(11, $point2->month()->toInt());
        $this->assertSame(6, $point2->day()->toInt());
        $this->assertSame(9, $point2->hour()->toInt());
        $this->assertSame(3, $point2->minute()->toInt());
        $this->assertSame(1, $point2->second()->toInt());
        $this->assertSame(1, $point2->millisecond()->toInt());
    }

    public function testGoBack()
    {
        $point = PointInTime::at('2016-10-05T08:01:30.123+02:00');
        $point2 = $point->goBack(
            Period::of(1, 1, 1, 1, 1, 30, 125),
        );

        $this->assertSame(2016, $point->year()->toInt());
        $this->assertSame(10, $point->month()->toInt());
        $this->assertSame(5, $point->day()->toInt());
        $this->assertSame(8, $point->hour()->toInt());
        $this->assertSame(1, $point->minute()->toInt());
        $this->assertSame(30, $point->second()->toInt());
        $this->assertSame(123, $point->millisecond()->toInt());
        $this->assertSame(2015, $point2->year()->toInt());
        $this->assertSame(9, $point2->month()->toInt());
        $this->assertSame(4, $point2->day()->toInt());
        $this->assertSame(6, $point2->hour()->toInt());
        $this->assertSame(59, $point2->minute()->toInt());
        $this->assertSame(59, $point2->second()->toInt());
        $this->assertSame(998, $point2->millisecond()->toInt());

        $this->assertSame(
            '2016-10-05T08:01:29.500000+02:00',
            $point
                ->goBack(Period\Millisecond::of(623))
                ->format(Format::of('Y-m-d\TH:i:s.uP')),
        );
    }

    public function testGoBackOneDay()
    {
        $point = PointInTime::at('2018-03-04');
        $point2 = $point->goBack(Day::of(1));
        $format = Format::of('Y-m-d\TH:i:s.u');

        $this->assertSame(
            '2018-03-04T00:00:00.000000',
            $point->format($format),
        );
        $this->assertSame(
            '2018-03-03T00:00:00.000000',
            $point2->format($format),
        );
    }

    public function testGoBackOneMillisecondWhenCurrentPointIsAtPreciselyZeroMillisecond()
    {
        $point = PointInTime::at('1402-07-21 02:42:53.000000');
        $point2 = $point->goBack(Period\Millisecond::of(1));
        $format = Format::of('Y-m-d\TH:i:s.u');

        $this->assertSame(
            '1402-07-21T02:42:53.000000',
            $point->format($format),
        );
        $this->assertSame(
            '1402-07-21T02:42:52.999000',
            $point2->format($format),
        );
    }
}
