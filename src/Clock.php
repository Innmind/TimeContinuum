<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum;

use Innmind\TimeContinuum\Clock\{
    Implementation,
    Logger,
    Via,
    OfFormat,
};
use Innmind\Immutable\Attempt;
use Psr\Log\LoggerInterface;

final class Clock
{
    private function __construct(
        private Implementation $implementation,
    ) {
    }

    #[\NoDiscard]
    public static function live(): self
    {
        return self::via(PointInTime::now(...));
    }

    #[\NoDiscard]
    public static function frozen(PointInTime $point): self
    {
        return new self(new Via(
            static fn() => $point,
            $point->offset(),
        ));
    }

    #[\NoDiscard]
    public static function logger(self $clock, LoggerInterface $logger): self
    {
        return new self(new Logger(
            $clock->implementation,
            $logger,
        ));
    }

    /**
     * @internal
     *
     * @param callable(): PointInTime $now
     */
    #[\NoDiscard]
    public static function via(callable $now): self
    {
        return new self(new Via(
            \Closure::fromCallable($now),
            Offset::utc(),
        ));
    }

    #[\NoDiscard]
    public function now(): PointInTime
    {
        return $this->implementation->now();
    }

    /**
     * @param callable(Timezones): Timezone $changeTimezone
     */
    #[\NoDiscard]
    public function switch(callable $changeTimezone): self
    {
        return new self($this->implementation->switch($changeTimezone));
    }

    /**
     * @psalm-mutation-free
     *
     * @param non-empty-string $date
     *
     * @return Attempt<PointInTime>
     */
    #[\NoDiscard]
    public function at(string $date, Format|Format\Custom $format): Attempt
    {
        if ($format instanceof Format\Custom) {
            $format = $format->normalize();
        }

        return $this->implementation->at($date, $format);
    }

    /**
     * @psalm-mutation-free
     */
    #[\NoDiscard]
    public function ofFormat(Format|Format\Custom $format): OfFormat
    {
        if ($format instanceof Format\Custom) {
            $format = $format->normalize();
        }

        return OfFormat::new($this, $format);
    }
}
