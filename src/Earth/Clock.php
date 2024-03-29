<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum\Earth;

use Innmind\TimeContinuum\{
    Clock as ClockInterface,
    Timezone,
    PointInTime,
    Format,
    Earth\PointInTime\PointInTime as EarthPointInTime,
    Earth\PointInTime\Now,
    Earth\Timezone\UTC,
};
use Innmind\Immutable\Maybe;

final class Clock implements ClockInterface
{
    private Timezone $timezone;

    public function __construct(Timezone $timezone = null)
    {
        if ($timezone === null) {
            [$hour, $minute] = \explode(':', \date('P'));
            $timezone = new UTC((int) $hour, (int) $minute);
        }

        $this->timezone = $timezone;
    }

    public function now(): PointInTime
    {
        return (new Now)->changeTimezone($this->timezone);
    }

    /**
     * @psalm-pure
     */
    public function at(string $date, Format $format = null): Maybe
    {
        if ($format instanceof Format) {
            try {
                /** @psalm-suppress ImpureMethodCall */
                $datetime = \DateTimeImmutable::createFromFormat($format->toString(), $date);
            } catch (\ValueError) {
                /** @var Maybe<PointInTime> */
                return Maybe::nothing();
            }

            if ($datetime === false) {
                /** @var Maybe<PointInTime> */
                return Maybe::nothing();
            }

            if ($datetime->format($format->toString()) !== $date) {
                /** @var Maybe<PointInTime> */
                return Maybe::nothing();
            }

            $date = $datetime->format(\DateTime::ATOM);
        }

        /**
         * @psalm-suppress ImpureVariable
         * @psalm-suppress ImpurePropertyFetch
         */
        return Maybe::just((new EarthPointInTime($date))->changeTimezone($this->timezone));
    }
}
