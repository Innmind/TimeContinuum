<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth;

use Innmind\TimeContinuum\{
    Earth\Clock,
    Clock as ClockInterface,
    PointInTime,
    Format,
    Earth\Timezone\UTC,
};
use PHPUnit\Framework\TestCase;

class EarthTest extends TestCase
{
    public function testInterface()
    {
        $this->assertInstanceOf(
            ClockInterface::class,
            new Clock
        );
    }

    public function testNow()
    {
        $this->assertInstanceOf(
            PointInTime::class,
            $now = (new Clock)->now()
        );
        $timezone = date('P');
        $timezone = $timezone === '+00:00' ? 'Z' : $timezone;
        $this->assertSame(
            $timezone,
            (string) $now->timezone()
        );
    }

    public function testAt()
    {
        $this->assertInstanceOf(
            PointInTime::class,
            $point = (new Clock)->at('2016-10-08T16:08:30+02:00')
        );
        $date = new \DateTime('2016-10-08T16:08:30+02:00');
        $date->setTimezone(new \DateTimeZone(date('P'))); //system timezone
        $this->assertSame(
            $date->format(\DateTime::ATOM),
            (string) $point
        );
    }

    public function testNowAtGivenExpectedTimezone()
    {
        $this->assertInstanceOf(
            PointInTime::class,
            $now = (new Clock(new UTC(6, 42)))->now()
        );
        $this->assertSame('+06:42', (string) $now->timezone());
    }

    public function testAtWithExpectedTimezone()
    {
        $this->assertInstanceOf(
            PointInTime::class,
            $point = (new Clock(new UTC(6, 42)))->at('2016-10-08T16:08:30+02:00')
        );
        $this->assertSame('+06:42', (string) $point->timezone());
    }

    public function testAtWithSpecificFormat()
    {
        $this->assertInstanceOf(
            PointInTime::class,
            $point = (new Clock)->at('+02:00 2016-10-08 16:08:30', new class implements Format {
                public function __toString(): string
                {
                    return 'P Y-m-d H:i:s';
                }
            })
        );
        $date = new \DateTime('2016-10-08T16:08:30+02:00');
        $date->setTimezone(new \DateTimeZone(date('P'))); //system timezone
        $this->assertSame(
            $date->format(\DateTime::ATOM),
            (string) $point
        );
    }
}
