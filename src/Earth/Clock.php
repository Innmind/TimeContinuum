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

    public function at(string $date, Format $format = null): PointInTime
    {
        if ($format instanceof Format) {
            $date = \DateTimeImmutable::createFromFormat($format->toString(), $date)->format(\DateTime::ATOM);
        }

        return (new EarthPointInTime($date))->changeTimezone($this->timezone);
    }
}
