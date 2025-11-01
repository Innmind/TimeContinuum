<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum;

use Innmind\TimeContinuum\Clock\{
    Implementation,
    Logger,
    Via,
    OfFormat,
};
use Innmind\Immutable\Maybe;
use Psr\Log\LoggerInterface;

final class Clock
{
    private function __construct(
        private Implementation $implementation,
    ) {
    }

    public static function live(): self
    {
        return self::via(PointInTime::now(...));
    }

    public static function frozen(PointInTime $point): self
    {
        return new self(new Via(
            static fn() => $point,
            $point->offset(),
        ));
    }

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
    public static function via(callable $now): self
    {
        return new self(new Via(
            \Closure::fromCallable($now),
            Offset::utc(),
        ));
    }

    public function now(): PointInTime
    {
        return $this->implementation->now();
    }

    /**
     * @param callable(Timezones): Timezone $changeTimezone
     */
    public function switch(callable $changeTimezone): self
    {
        $now = $this->now();
        /** @var callable(non-empty-string): Timezone */
        $of = static function(string $zone) use ($now): Timezone {
            /** @var non-empty-string $zone */
            $now = (new \DateTimeImmutable($now->format(Format::iso8601())))->setTimezone(new \DateTimeZone($zone));

            return Timezone::of(
                Offset::from($now->format('P')),
                (bool) (int) $now->format('I'),
            );
        };

        $offset = $changeTimezone(Timezones::new($of))->offset();

        return new self($this->implementation->use($offset));
    }

    /**
     * @psalm-mutation-free
     *
     * @param non-empty-string $date
     *
     * @return Maybe<PointInTime>
     */
    public function at(string $date, Format|Format\Custom $format): Maybe
    {
        if ($format instanceof Format\Custom) {
            $format = $format->normalize();
        }

        return $this->implementation->at($date, $format);
    }

    /**
     * @psalm-mutation-free
     */
    public function ofFormat(Format|Format\Custom $format): OfFormat
    {
        if ($format instanceof Format\Custom) {
            $format = $format->normalize();
        }

        return OfFormat::new($this, $format);
    }
}
