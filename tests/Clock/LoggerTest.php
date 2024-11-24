<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Clock;

use Innmind\TimeContinuum\{
    Clock,
    Format,
};
use Fixtures\Innmind\TimeContinuum\PointInTime;
use Psr\Log\{
    LoggerInterface,
    LoggerTrait,
};
use Innmind\BlackBox\{
    PHPUnit\Framework\TestCase,
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
                $logger = new class implements LoggerInterface {
                    use LoggerTrait;

                    public array $logs = [];

                    public function log($level, string|\Stringable $message, array $context = []): void
                    {
                        $this->logs[] = [$level, $message, $context];
                    }
                };

                $clock = Clock::logger($concrete, $logger);

                $this->assertSame($now, $clock->now());
                $this->assertCount(1, $logger->logs);
                $this->assertSame(
                    [
                        'debug',
                        'Current time is {point}',
                        ['point' => $now->format(Format::iso8601())],
                    ],
                    $logger->logs[0],
                );
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
                $logger = new class implements LoggerInterface {
                    use LoggerTrait;

                    public array $logs = [];

                    public function log($level, string|\Stringable $message, array $context = []): void
                    {
                        $this->logs[] = [$level, $message, $context];
                    }
                };

                $clock = Clock::logger($concrete, $logger);

                $this->assertSame(
                    $point->toString(),
                    $clock->at($point->format(Format::iso8601()), Format::iso8601())->match(
                        static fn($found) => $found->toString(),
                        static fn() => null,
                    ),
                );
                $this->assertCount(1, $logger->logs);
                $this->assertSame(
                    [
                        'debug',
                        'Asked time {date} ({format}) resolved to {point}',
                        [
                            'date' => $point->format(Format::iso8601()),
                            'format' => Format::iso8601()->toString(),
                            'point' => $point->format(Format::iso8601()),
                        ],
                    ],
                    $logger->logs[0],
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
                $logger = new class implements LoggerInterface {
                    use LoggerTrait;

                    public array $logs = [];

                    public function log($level, string|\Stringable $message, array $context = []): void
                    {
                        $this->logs[] = [$level, $message, $context];
                    }
                };

                $clock = Clock::logger($concrete, $logger);

                $this->assertSame(
                    $point->toString(),
                    $clock->at($point->format($format), $format)->match(
                        static fn($point) => $point->toString(),
                        static fn() => null,
                    ),
                );
                $this->assertCount(1, $logger->logs);
                $this->assertSame(
                    [
                        'debug',
                        'Asked time {date} ({format}) resolved to {point}',
                        [
                            'date' => $point->format($format),
                            'format' => $format->toString(),
                            'point' => $point->format(Format::iso8601()),
                        ],
                    ],
                    $logger->logs[0],
                );
            });
    }
}
