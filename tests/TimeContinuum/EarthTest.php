<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\TimeContinuum;

use Innmind\TimeContinuum\{
    TimeContinuum\Earth,
    TimeContinuumInterface,
    PointInTimeInterface,
    Timezone\Earth\UTC
};

class EarthTest extends \PHPUnit_Framework_TestCase
{
    public function testInterface()
    {
        $this->assertInstanceOf(
            TimeContinuumInterface::class,
            new Earth
        );
    }

    public function testNow()
    {
        $this->assertInstanceOf(
            PointInTimeInterface::class,
            $now = (new Earth)->now()
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
            PointInTimeInterface::class,
            $point = (new Earth)->at('2016-10-08T16:08:30+02:00')
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
            PointInTimeInterface::class,
            $now = (new Earth(new UTC(6, 42)))->now()
        );
        $this->assertSame('+06:42', (string) $now->timezone());
    }

    public function testAtWithExpectedTimezone()
    {
        $this->assertInstanceOf(
            PointInTimeInterface::class,
            $point = (new Earth(new UTC(6, 42)))->at('2016-10-08T16:08:30+02:00')
        );
        $this->assertSame('+06:42', (string) $point->timezone());
    }
}
