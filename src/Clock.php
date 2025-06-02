<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum;

use Innmind\TimeContinuum\Clock\{
    Live,
    Frozen,
    Logger,
    OfFormat,
};
use Innmind\Immutable\Maybe;
use Psr\Log\LoggerInterface;

final class Clock
{
    private function __construct(
        private Live|Frozen|Logger $implementation,
    ) {
    }

    public static function live(): self
    {
        return new self(new Live(Offset::utc()));
    }

    public static function frozen(PointInTime $point): self
    {
        return new self(new Frozen($point, new Live(Offset::utc())));
    }

    public static function logger(self $clock, LoggerInterface $logger): self
    {
        return new self(new Logger($clock, $logger));
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
        return new self($this->implementation->switch($changeTimezone));
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
