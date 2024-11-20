<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Logger;

use Innmind\TimeContinuum\{
    Logger\Clock,
    Clock as ClockInterface,
    Format,
};
use Fixtures\Innmind\TimeContinuum\Earth\PointInTime;
use Innmind\Immutable\Maybe;
use Psr\Log\LoggerInterface;
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
            new Clock(
                $this->createMock(ClockInterface::class),
                $this->createMock(LoggerInterface::class),
            ),
        );
    }

    public function testGeneratedNowIsLogged()
    {
        $this
            ->forAll(PointInTime::any())
            ->then(function($now) {
                $concrete = $this->createMock(ClockInterface::class);
                $concrete
                    ->expects($this->once())
                    ->method('now')
                    ->willReturn($now);
                $logger = $this->createMock(LoggerInterface::class);
                $logger
                    ->expects($this->once())
                    ->method('debug')
                    ->with(
                        'Current time is {point}',
                        ['point' => $now->format(Format::iso8601())],
                    );

                $clock = new Clock($concrete, $logger);

                $this->assertSame($now, $clock->now());
            });
    }

    public function testAskedDateIsLogged()
    {
        $this
            ->forAll(
                Set\Strings::any(),
                PointInTime::any(),
            )
            ->then(function($date, $point) {
                $concrete = $this->createMock(ClockInterface::class);
                $concrete
                    ->expects($this->once())
                    ->method('at')
                    ->with($date)
                    ->willReturn(Maybe::just($point));
                $logger = $this->createMock(LoggerInterface::class);
                $logger
                    ->expects($this->once())
                    ->method('debug')
                    ->with(
                        'Asked time {date} ({format}) resolved to {point}',
                        [
                            'date' => $date,
                            'format' => 'unknown',
                            'point' => $point->format(Format::iso8601()),
                        ],
                    );

                $clock = new Clock($concrete, $logger);

                $this->assertSame(
                    $point,
                    $clock->at($date)->match(
                        static fn($point) => $point,
                        static fn() => null,
                    ),
                );
            });
    }

    public function testAskedDateWithSpecificFormatIsLogged()
    {
        $this
            ->forAll(
                Set\Strings::any(),
                PointInTime::any(),
                Set\Elements::of(
                    Format::cookie(),
                    Format::iso8601(),
                    Format::rfc1036(),
                    Format::rfc1123(),
                    Format::rfc2822(),
                    Format::rfc822(),
                    Format::rfc850(),
                    Format::rss(),
                    Format::w3c(),
                ),
            )
            ->then(function($date, $point, $format) {
                $concrete = $this->createMock(ClockInterface::class);
                $concrete
                    ->expects($this->once())
                    ->method('at')
                    ->with($date)
                    ->willReturn(Maybe::just($point));
                $logger = $this->createMock(LoggerInterface::class);
                $logger
                    ->expects($this->once())
                    ->method('debug')
                    ->with(
                        'Asked time {date} ({format}) resolved to {point}',
                        [
                            'date' => $date,
                            'format' => $format->toString(),
                            'point' => $point->format(Format::iso8601()),
                        ],
                    );

                $clock = new Clock($concrete, $logger);

                $this->assertSame(
                    $point,
                    $clock->at($date, $format)->match(
                        static fn($point) => $point,
                        static fn() => null,
                    ),
                );
            });
    }
}
