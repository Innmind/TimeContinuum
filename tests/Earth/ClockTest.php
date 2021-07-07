<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth;

use Innmind\TimeContinuum\{
    Earth\Clock,
    Clock as ClockInterface,
    PointInTime,
    Format,
    Earth\Timezone\UTC,
    Earth\Format\ISO8601,
};
use PHPUnit\Framework\TestCase;
use Innmind\BlackBox\{
    PHPUnit\BlackBox,
    Set,
};

class ClockTest extends TestCase
{
    use BlackBox;

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
        $timezone = \date('P');
        $timezone = $timezone === '+00:00' ? 'Z' : $timezone;
        $this->assertSame(
            $timezone,
            $now->timezone()->toString()
        );
    }

    public function testAt()
    {
        $this->assertInstanceOf(
            PointInTime::class,
            $point = (new Clock)->at('2016-10-08T16:08:30+02:00')->match(
                static fn($point) => $point,
                static fn() => null,
            ),
        );
        $date = new \DateTimeImmutable('2016-10-08T16:08:30+02:00');
        $date = $date->setTimezone(new \DateTimeZone(\date('P'))); //system timezone
        $this->assertSame(
            $date->format(\DateTime::ATOM),
            $point->toString()
        );
    }

    public function testNowAtGivenExpectedTimezone()
    {
        $this->assertInstanceOf(
            PointInTime::class,
            $now = (new Clock(new UTC(6, 42)))->now()
        );
        $this->assertSame('+06:42', $now->timezone()->toString());
    }

    public function testAtWithExpectedTimezone()
    {
        $this->assertInstanceOf(
            PointInTime::class,
            $point = (new Clock(new UTC(6, 42)))->at('2016-10-08T16:08:30+02:00')->match(
                static fn($point) => $point,
                static fn() => null,
            ),
        );
        $this->assertSame('+06:42', $point->timezone()->toString());
    }

    public function testAtWithSpecificFormat()
    {
        $this->assertInstanceOf(
            PointInTime::class,
            $point = (new Clock)->at('+02:00 2016-10-08 16:08:30', new class implements Format {
                public function toString(): string
                {
                    return 'P Y-m-d H:i:s';
                }
            })->match(
                static fn($point) => $point,
                static fn() => null,
            ),
        );
        $date = new \DateTimeImmutable('2016-10-08T16:08:30+02:00');
        $date = $date->setTimezone(new \DateTimeZone(\date('P'))); //system timezone
        $this->assertSame(
            $date->format(\DateTime::ATOM),
            $point->toString()
        );
    }

    public function testAtWithDateNotOfExpectedFormat()
    {
        $this
            ->forAll(Set\Strings::any())
            ->then(function($date) {
                $clock = new Clock;

                $this->assertNull($clock->at($date, new ISO8601)->match(
                    static fn($point) => $point,
                    static fn() => null,
                ));
            });
    }
}
