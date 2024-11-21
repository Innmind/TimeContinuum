<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum\Clock;

use Innmind\TimeContinuum\{
    Timezone,
    PointInTime,
    Format,
};
use Innmind\Immutable\Maybe;

/**
 * @internal
 */
final class Live
{
    private Timezone $timezone;

    public function __construct()
    {
        $this->timezone = Timezone::of(0, 0);
    }

    public function now(): PointInTime
    {
        return PointInTime::now()->changeTimezone($this->timezone);
    }

    /**
     * @psalm-pure
     *
     * @param non-empty-string $date
     *
     * @return Maybe<PointInTime>
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
        return Maybe::just(PointInTime::at($date)->changeTimezone($this->timezone));
    }
}
