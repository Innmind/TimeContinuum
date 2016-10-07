<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\PointInTime\Earth;

use Innmind\TimeContinuum\{
    PointInTime\Earth\PointInTime,
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
    Period\Earth\Composite
};

class PointInTimeTest extends \PHPUnit_Framework_TestCase
{
    public function testInterface()
    {
        $point = new PointInTime('2016-10-05T08:01:30.123+02:00');

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
        $this->assertSame(2016, $point->year()->toInt());
        $this->assertSame(10, $point->month()->toInt());
        $this->assertSame(5, $point->day()->toInt());
        $this->assertSame(8, $point->hour()->toInt());
        $this->assertSame(1, $point->minute()->toInt());
        $this->assertSame(30, $point->second()->toInt());
        $this->assertSame(123, $point->millisecond()->toInt());
        $this->assertSame(
            (new \DateTime('2016-10-05T08:01:30.123+02:00'))->getTimestamp() * 1000 + $point->millisecond()->toInt(),
            $point->milliseconds()
        );
        $this->assertSame('+02:00', (string) $point->timezone());
        $this->assertSame('2016-10-05T08:01:30+02:00', (string) $point);
    }

    public function testFormat()
    {
        $point = new PointInTime('2016-10-05T08:01:30.123+02:00');

        $this->assertSame(
            '08:01:30 05/10/2016',
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
        $point = new PointInTime('2016-10-05T08:01:30.123+02:00');
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
        $this->assertSame(2016, $point2->year()->toInt());
        $this->assertSame(10, $point2->month()->toInt());
        $this->assertSame(5, $point2->day()->toInt());
        $this->assertSame(3, $point2->hour()->toInt());
        $this->assertSame(31, $point2->minute()->toInt());
        $this->assertSame(30, $point2->second()->toInt());
        $this->assertSame(123, $point2->millisecond()->toInt());
        $this->assertSame('-02:30', (string) $point2->timezone());
    }

    public function testAtUTC()
    {
        $point = new PointInTime('2016-10-05T08:01:30.123+02:00');
        $point2 = $point->atUTC();

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
        $this->assertSame(2016, $point2->year()->toInt());
        $this->assertSame(10, $point2->month()->toInt());
        $this->assertSame(5, $point2->day()->toInt());
        $this->assertSame(6, $point2->hour()->toInt());
        $this->assertSame(1, $point2->minute()->toInt());
        $this->assertSame(30, $point2->second()->toInt());
        $this->assertSame(123, $point2->millisecond()->toInt());
        $this->assertSame('Z', (string) $point2->timezone());
    }

    public function testElapsedSince()
    {
        $point = new PointInTime('2016-10-05T08:01:30.123+02:00');
        $point2 = new PointInTime('2016-10-05T08:03:30.234+02:00');
        $elapsed = $point2->elapsedSince($point);

        $this->assertInstanceOf(ElapsedPeriod::class, $elapsed);
        $this->assertSame(120111, $elapsed->milliseconds());
    }

    public function testAheadOf()
    {
        $point = new PointInTime('2016-10-05T08:01:30.123+02:00');
        $point2 = new PointInTime('2016-10-05T08:03:30.234+02:00');

        $this->assertTrue($point2->aheadOf($point));
        $this->assertFalse($point->aheadOf($point2));
    }

    public function testEquals()
    {
        $point = new PointInTime('2016-10-05T08:01:30.123+02:00');
        $point2 = new PointInTime('2016-10-05T08:03:30.234+02:00');
        $point3 = new PointInTime('2016-10-05T08:01:30.123+02:00');

        $this->assertTrue($point->equals($point3));
        $this->assertFalse($point->equals($point2));
    }

    public function testGoForward()
    {
        $point = new PointInTime('2016-10-05T08:01:30.123+02:00');
        $point2 = $point->goForward(
            new Composite(1, 1, 1, 1, 1, 30, 878)
        );

        $this->assertInstanceOf(PointInTimeInterface::class, $point2);
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
        $point = new PointInTime('2016-10-05T08:01:30.123+02:00');
        $point2 = $point->goBack(
            new Composite(1, 1, 1, 1, 1, 30, 125)
        );

        $this->assertInstanceOf(PointInTimeInterface::class, $point2);
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
    }
}
