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
    Exception\RuntimeException,
};

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
     *
     * @throws RuntimeException When date is not of specified format
     */
    public function at(string $date, Format $format = null): PointInTime
    {
        if ($format instanceof Format) {
            $datetime = \DateTimeImmutable::createFromFormat($format->toString(), $date);

            if ($datetime === false) {
                throw new RuntimeException("'$date' doesn't match format '{$format->toString()}'");
            }

            $date = $datetime->format(\DateTime::ATOM);
        }

        return (new EarthPointInTime($date))->changeTimezone($this->timezone);
    }
}
