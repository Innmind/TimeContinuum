<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Clock;

use Innmind\TimeContinuum\{
    Clock,
    PointInTime,
    Format,
    Timezone,
};
use Innmind\BlackBox\{
    PHPUnit\Framework\TestCase,
    PHPUnit\BlackBox,
    Set,
};

class LiveTest extends TestCase
{
    use BlackBox;

    public function testNow()
    {
        $this->assertInstanceOf(
            PointInTime::class,
            $now = Clock::live()->now(),
        );
        $offset = \date('P');
        $offset = $offset === '+00:00' ? 'Z' : $offset;
        $this->assertSame(
            $offset,
            $now->offset()->toString(),
        );
    }

    public function testAt()
    {
        $this->assertInstanceOf(
            PointInTime::class,
            $point = Clock::live()->at('2016-10-08T16:08:30+02:00', Format::iso8601())->match(
                static fn($point) => $point,
                static fn() => null,
            ),
        );
        $date = new \DateTimeImmutable('2016-10-08T16:08:30+02:00');
        $date = $date->setTimezone(new \DateTimeZone(\date('P'))); //system timezone
        $this->assertSame(
            $date->format('Y-m-d\TH:i:s.uP'),
            $point->toString(),
        );
    }

    public function testAtWithSpecificFormat()
    {
        $this->assertInstanceOf(
            PointInTime::class,
            $point = Clock::live()->at('+02:00 2016-10-08 16:08:30', Format::of('P Y-m-d H:i:s'))->match(
                static fn($point) => $point,
                static fn() => null,
            ),
        );
        $date = new \DateTimeImmutable('2016-10-08T16:08:30+02:00');
        $date = $date->setTimezone(new \DateTimeZone(\date('P'))); //system timezone
        $this->assertSame(
            $date->format('Y-m-d\TH:i:s.uP'),
            $point->toString(),
        );
    }

    public function testAtWithDateNotOfExpectedFormat()
    {
        $this
            ->forAll(Set\Strings::any())
            ->then(function($date) {
                $clock = Clock::live();

                $this->assertNull($clock->at($date, Format::iso8601())->match(
                    static fn($point) => $point,
                    static fn() => null,
                ));
            });
    }

    public function testAtWithNullDate()
    {
        $clock = Clock::live();
        $this->assertNull($clock->at("\x00", Format::iso8601())->match(
            static fn($point) => $point,
            static fn() => null,
        ));
    }

    public function testDateCorrectlyRespectTheFormatGiven()
    {
        $this
            ->forAll(
                Set\Integers::between(10, 99),
                Set\Integers::between(1, 9),
                Set\Integers::between(10, 28),
            )
            ->then(function($year, $month, $day) {
                $date = "$year-0$month-$day";

                $this->assertNull(
                    Clock::live()
                        ->at($date, Format::of('Y-m-d'))
                        ->match(
                            static fn($point) => $point,
                            static fn() => null,
                        ),
                );
            });
    }
}
