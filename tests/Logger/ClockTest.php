<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Logger;

use Innmind\TimeContinuum\{
    Logger\Clock,
    Clock as ClockInterface,
    PointInTime,
    Format,
    Earth\Format\ISO8601,
};
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
            ->forAll(Set\Strings::any())
            ->then(function($value) {
                $concrete = $this->createMock(ClockInterface::class);
                $concrete
                    ->expects($this->once())
                    ->method('now')
                    ->willReturn($now = $this->createMock(PointInTime::class));
                $now
                    ->expects($this->once())
                    ->method('format')
                    ->with(new ISO8601)
                    ->willReturn($value);
                $logger = $this->createMock(LoggerInterface::class);
                $logger
                    ->expects($this->once())
                    ->method('debug')
                    ->with(
                        'Current time is {point}',
                        ['point' => $value],
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
                Set\Strings::any(),
            )
            ->then(function($date, $value) {
                $concrete = $this->createMock(ClockInterface::class);
                $concrete
                    ->expects($this->once())
                    ->method('at')
                    ->with($date)
                    ->willReturn(Maybe::just($point = $this->createMock(PointInTime::class)));
                $point
                    ->expects($this->once())
                    ->method('format')
                    ->with(new ISO8601)
                    ->willReturn($value);
                $logger = $this->createMock(LoggerInterface::class);
                $logger
                    ->expects($this->once())
                    ->method('debug')
                    ->with(
                        'Asked time {date} ({format}) resolved to {point}',
                        [
                            'date' => $date,
                            'format' => 'unknown',
                            'point' => $value,
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
                Set\Strings::any(),
                Set\Strings::any(),
            )
            ->then(function($date, $value, $format) {
                $formatObject = $this->createMock(Format::class);
                $formatObject
                    ->expects($this->once())
                    ->method('toString')
                    ->willReturn($format);
                $formatClass = \get_class($formatObject);
                $concrete = $this->createMock(ClockInterface::class);
                $concrete
                    ->expects($this->once())
                    ->method('at')
                    ->with($date)
                    ->willReturn(Maybe::just($point = $this->createMock(PointInTime::class)));
                $point
                    ->expects($this->once())
                    ->method('format')
                    ->with(new ISO8601)
                    ->willReturn($value);
                $logger = $this->createMock(LoggerInterface::class);
                $logger
                    ->expects($this->once())
                    ->method('debug')
                    ->with(
                        'Asked time {date} ({format}) resolved to {point}',
                        [
                            'date' => $date,
                            'format' => "$formatClass($format)",
                            'point' => $value,
                        ],
                    );

                $clock = new Clock($concrete, $logger);

                $this->assertSame(
                    $point,
                    $clock->at($date, $formatObject)->match(
                        static fn($point) => $point,
                        static fn() => null,
                    ),
                );
            });
    }
}
