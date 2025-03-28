<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum;

use Innmind\TimeContinuum\{
    PointInTime,
    Offset,
    Format,
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

class PointInTimeTest extends TestCase
{
    public function testInterface()
    {
        $point = PointInTime::at(new \DateTimeImmutable('2016-10-05T08:01:30.123+02:00'));

        $this->assertInstanceOf(Year::class, $point->year());
        $this->assertInstanceOf(Month::class, $point->month());
        $this->assertInstanceOf(Day::class, $point->day());
        $this->assertInstanceOf(Hour::class, $point->hour());
        $this->assertInstanceOf(Minute::class, $point->minute());
        $this->assertInstanceOf(Second::class, $point->second());
        $this->assertInstanceOf(Millisecond::class, $point->millisecond());
        $this->assertInstanceOf(Offset::class, $point->offset());
        $this->assertSame(2016, $point->year()->toInt());
        $this->assertSame(10, $point->month()->ofYear()->toInt());
        $this->assertSame(5, $point->day()->ofMonth());
        $this->assertSame(8, $point->hour()->toInt());
        $this->assertSame(1, $point->minute()->toInt());
        $this->assertSame(30, $point->second()->toInt());
        $this->assertSame(123, $point->millisecond()->toInt());
        $this->assertSame('+02:00', $point->offset()->toString());
        $this->assertSame('2016-10-05T08:01:30.123000+02:00', $point->toString());
    }

    public function testPreserveMillisecondsWhenNanosecondsInString()
    {
        $point = PointInTime::at(new \DateTimeImmutable('2016-10-05T08:01:30.999678+02:00'));

        $this->assertSame(999, $point->millisecond()->toInt());
        $this->assertSame(30, $point->second()->toInt());
    }

    public function testFormat()
    {
        $point = PointInTime::at(new \DateTimeImmutable('2016-10-05T08:01:30.123+02:00'));

        $this->assertSame(
            '08:01:30 05/10/2016',
            $point->format(Format::of('H:i:s d/m/Y')),
        );
    }

    public function testChangeOffset()
    {
        $point = PointInTime::at(new \DateTimeImmutable('2016-10-05T08:01:30.123+02:00'));
        $point2 = $point->changeOffset(Offset::minus(2, 30));

        $this->assertNotSame($point, $point2);
        $this->assertNotSame($point->year(), $point2->year());
        $this->assertNotSame($point->month(), $point2->month());
        $this->assertNotSame($point->day(), $point2->day());
        $this->assertNotSame($point->hour(), $point2->hour());
        $this->assertNotSame($point->minute(), $point2->minute());
        $this->assertNotSame($point->second(), $point2->second());
        $this->assertNotSame($point->millisecond(), $point2->millisecond());
        $this->assertSame(2016, $point2->year()->toInt());
        $this->assertSame(10, $point2->month()->ofYear()->toInt());
        $this->assertSame(5, $point2->day()->ofMonth());
        $this->assertSame(3, $point2->hour()->toInt());
        $this->assertSame(31, $point2->minute()->toInt());
        $this->assertSame(30, $point2->second()->toInt());
        $this->assertSame(123, $point2->millisecond()->toInt());
        $this->assertSame('-02:30', $point2->offset()->toString());
    }

    public function testElapsedSince()
    {
        $point = PointInTime::at(new \DateTimeImmutable('2016-10-05T08:01:30.123+02:00'));
        $point2 = PointInTime::at(new \DateTimeImmutable('2016-10-05T08:03:30.234+02:00'));
        $elapsed = $point2->elapsedSince($point)->asPeriod();

        $this->assertSame(2, $elapsed->minutes());
        $this->assertSame(0, $elapsed->seconds());
        $this->assertSame(111, $elapsed->milliseconds());
        $this->assertSame(0, $elapsed->microseconds());
    }

    public function testAheadOf()
    {
        $point = PointInTime::at(new \DateTimeImmutable('2016-10-05T08:01:30.123+02:00'));
        $point2 = PointInTime::at(new \DateTimeImmutable('2016-10-05T08:03:30.234+02:00'));

        $this->assertTrue($point2->aheadOf($point));
        $this->assertFalse($point->aheadOf($point2));
    }

    public function testEquals()
    {
        $point = PointInTime::at(new \DateTimeImmutable('2016-10-05T08:01:30.123+02:00'));
        $point2 = PointInTime::at(new \DateTimeImmutable('2016-10-05T08:03:30.234+02:00'));
        $point3 = PointInTime::at(new \DateTimeImmutable('2016-10-05T08:01:30.123+02:00'));

        $this->assertTrue($point->equals($point3));
        $this->assertFalse($point->equals($point2));
    }

    public function testGoForward()
    {
        $point = PointInTime::at(new \DateTimeImmutable('2016-10-05T08:01:30.123+02:00'));
        $point2 = $point->goForward(
            Period::of(1, 1, 1, 1, 1, 30, 878, 0),
        );

        $this->assertSame(2016, $point->year()->toInt());
        $this->assertSame(10, $point->month()->ofYear()->toInt());
        $this->assertSame(5, $point->day()->ofMonth());
        $this->assertSame(8, $point->hour()->toInt());
        $this->assertSame(1, $point->minute()->toInt());
        $this->assertSame(30, $point->second()->toInt());
        $this->assertSame(123, $point->millisecond()->toInt());
        $this->assertSame(2017, $point2->year()->toInt());
        $this->assertSame(11, $point2->month()->ofYear()->toInt());
        $this->assertSame(6, $point2->day()->ofMonth());
        $this->assertSame(9, $point2->hour()->toInt());
        $this->assertSame(3, $point2->minute()->toInt());
        $this->assertSame(1, $point2->second()->toInt());
        $this->assertSame(1, $point2->millisecond()->toInt());
    }

    public function testGoBack()
    {
        $point = PointInTime::at(new \DateTimeImmutable('2016-10-05T08:01:30.123+02:00'));
        $point2 = $point->goBack(
            Period::of(1, 1, 1, 1, 1, 30, 125, 0),
        );

        $this->assertSame(2016, $point->year()->toInt());
        $this->assertSame(10, $point->month()->ofYear()->toInt());
        $this->assertSame(5, $point->day()->ofMonth());
        $this->assertSame(8, $point->hour()->toInt());
        $this->assertSame(1, $point->minute()->toInt());
        $this->assertSame(30, $point->second()->toInt());
        $this->assertSame(123, $point->millisecond()->toInt());
        $this->assertSame(2015, $point2->year()->toInt());
        $this->assertSame(9, $point2->month()->ofYear()->toInt());
        $this->assertSame(4, $point2->day()->ofMonth());
        $this->assertSame(6, $point2->hour()->toInt());
        $this->assertSame(59, $point2->minute()->toInt());
        $this->assertSame(59, $point2->second()->toInt());
        $this->assertSame(998, $point2->millisecond()->toInt());

        $this->assertSame(
            '2016-10-05T08:01:29.500000+02:00',
            $point
                ->goBack(Period::millisecond(623))
                ->format(Format::of('Y-m-d\TH:i:s.uP')),
        );
    }

    public function testGoBackOneDay()
    {
        $point = PointInTime::at(new \DateTimeImmutable('2018-03-04'));
        $point2 = $point->goBack(Period::day(1));
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
        $point = PointInTime::at(new \DateTimeImmutable('1402-07-21 02:42:53.000000'));
        $point2 = $point->goBack(Period::millisecond(1));
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

    public function testGoBackOneMicrosecondWhenCurrentPointIsAtPreciselyZeroMillisecond()
    {
        $point = PointInTime::at(new \DateTimeImmutable('1402-07-21 02:42:53.000000'));
        $point2 = $point->goBack(Period::microsecond(1));
        $format = Format::of('Y-m-d\TH:i:s.u');

        $this->assertSame(
            '1402-07-21T02:42:53.000000',
            $point->format($format),
        );
        $this->assertSame(
            '1402-07-21T02:42:52.999999',
            $point2->format($format),
        );
    }
}
