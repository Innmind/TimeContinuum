<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum\TimeContinuum;

use Innmind\TimeContinuum\{
    TimeContinuumInterface,
    TimezoneInterface,
    PointInTimeInterface,
    FormatInterface,
    PointInTime\Earth\PointInTime,
    PointInTime\Earth\Now,
    Timezone\Earth\UTC,
};

final class Earth implements TimeContinuumInterface
{
    private $timezone;

    public function __construct(TimezoneInterface $timezone = null)
    {
        if ($timezone === null) {
            list($hour, $minute) = \explode(':', \date('P'));
            $timezone = new UTC((int) $hour, (int) $minute);
        }

        $this->timezone = $timezone;
    }

    public function now(): PointInTimeInterface
    {
        return (new Now)->changeTimezone($this->timezone);
    }

    public function at(string $date, FormatInterface $format = null): PointInTimeInterface
    {
        if ($format instanceof FormatInterface) {
            $date = \DateTimeImmutable::createFromFormat((string) $format, $date)->format(\DateTime::ATOM);
        }

        return (new PointInTime($date))->changeTimezone($this->timezone);
    }
}
