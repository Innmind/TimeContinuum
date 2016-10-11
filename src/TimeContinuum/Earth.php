<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum\TimeContinuum;

use Innmind\TimeContinuum\{
    TimeContinuumInterface,
    TimezoneInterface,
    PointInTimeInterface,
    PointInTime\Earth\PointInTime,
    PointInTime\Earth\Now,
    Timezone\Earth\UTC
};

final class Earth implements TimeContinuumInterface
{
    private $timezone;

    public function __construct(TimezoneInterface $timezone = null)
    {
        if ($timezone === null) {
            list($hour, $minute) = explode(':', date('P'));
            $timezone = new UTC((int) $hour, (int) $minute);
        }

        $this->timezone = $timezone;
    }

    public function now(): PointInTimeInterface
    {
        return (new Now)->changeTimezone($this->timezone);
    }

    public function at(string $date): PointInTimeInterface
    {
        return (new PointInTime($date))->changeTimezone($this->timezone);
    }
}
