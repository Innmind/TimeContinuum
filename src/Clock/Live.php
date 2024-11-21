<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum\Clock;

use Innmind\TimeContinuum\{
    Offset,
    PointInTime,
    Format,
};
use Innmind\Immutable\Maybe;

/**
 * @internal
 */
final class Live
{
    private Offset $offset;

    public function __construct()
    {
        $this->offset = Offset::utc();
    }

    public function now(): PointInTime
    {
        return PointInTime::now()->changeOffset($this->offset);
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
        return Maybe::just(PointInTime::at($date)->changeOffset($this->offset));
    }
}
