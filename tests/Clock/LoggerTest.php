<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Clock;

use Innmind\TimeContinuum\{
    Clock,
    Format,
};
use Fixtures\Innmind\TimeContinuum\PointInTime;
use Psr\Log\LoggerInterface;
use PHPUnit\Framework\TestCase;
use Innmind\BlackBox\{
    PHPUnit\BlackBox,
    Set,
};

class LoggerTest extends TestCase
{
    use BlackBox;

    public function testGeneratedNowIsLogged()
    {
        $this
            ->forAll(PointInTime::any())
            ->then(function($now) {
                $concrete = Clock::frozen($now);
                $logger = $this->createMock(LoggerInterface::class);
                $logger
                    ->expects($this->once())
                    ->method('debug')
                    ->with(
                        'Current time is {point}',
                        ['point' => $now->format(Format::iso8601())],
                    );

                $clock = Clock::logger($concrete, $logger);

                $this->assertSame($now, $clock->now());
            });
    }

    public function testAskedDateIsLogged()
    {
        $this
            ->forAll(
                PointInTime::any(),
            )
            ->then(function($point) {
                $concrete = Clock::frozen($point);
                $logger = $this->createMock(LoggerInterface::class);
                $logger
                    ->expects($this->once())
                    ->method('debug')
                    ->with(
                        'Asked time {date} ({format}) resolved to {point}',
                        [
                            'date' => $point->toString(),
                            'format' => 'unknown',
                            'point' => $point->format(Format::iso8601()),
                        ],
                    );

                $clock = Clock::logger($concrete, $logger);

                $this->assertSame(
                    $point->toString(),
                    $clock->at($point->toString())->match(
                        static fn($found) => $found->toString(),
                        static fn() => null,
                    ),
                );
            });
    }

    public function testAskedDateWithSpecificFormatIsLogged()
    {
        $this
            ->forAll(
                PointInTime::any(),
                Set\Elements::of(
                    Format::cookie(),
                    Format::iso8601(),
                    Format::rfc1123(),
                    Format::rfc2822(),
                    Format::rss(),
                    Format::w3c(),
                    // the year is not precise enough to allow to correctly
                    // parse any date with these formats
                    // Format::rfc1036(),
                    // Format::rfc822(),
                    // Format::rfc850(),
                ),
            )
            ->then(function($point, $format) {
                $concrete = Clock::frozen($point);
                $logger = $this->createMock(LoggerInterface::class);
                $logger
                    ->expects($this->once())
                    ->method('debug')
                    ->with(
                        'Asked time {date} ({format}) resolved to {point}',
                        [
                            'date' => $point->format($format),
                            'format' => $format->toString(),
                            'point' => $point->format(Format::iso8601()),
                        ],
                    );

                $clock = Clock::logger($concrete, $logger);

                $this->assertSame(
                    $point->toString(),
                    $clock->at($point->format($format), $format)->match(
                        static fn($point) => $point->toString(),
                        static fn() => null,
                    ),
                );
            });
    }
}
