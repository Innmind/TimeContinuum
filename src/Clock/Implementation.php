<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum\Clock;

use Innmind\TimeContinuum\{
    PointInTime,
    Format,
    Timezones,
    Timezone,
};
use Innmind\Immutable\Attempt;

/**
 * @internal
 */
interface Implementation
{
    /**
     * @param callable(Timezones): Timezone $changeTimezone
     */
    public function switch(callable $changeTimezone): self;

    public function now(): PointInTime;

    /**
     * @psalm-mutation-free
     *
     * @param non-empty-string $date
     *
     * @return Attempt<PointInTime>
     */
    public function at(string $date, Format $format): Attempt;
}
