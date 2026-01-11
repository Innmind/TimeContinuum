<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum\Move;

use Innmind\TimeContinuum\{
    PointInTime,
    Period,
};

final class Month
{
    private function __construct(
        private string $direction,
        private Period $months,
    ) {
    }

    #[\NoDiscard]
    public function __invoke(PointInTime $point): PointInTime
    {
        /** @var PointInTime $newPoint */
        $newPoint = (new StartOfMonth)($point)->{$this->direction}($this->months);
        $newPoint = $newPoint->goForward(
            Period::hour($point->hour()->toInt())
                ->add(Period::minute($point->minute()->toInt()))
                ->add(Period::second($point->second()->toInt()))
                ->add(Period::millisecond($point->millisecond()->toInt()))
                ->add(Period::microsecond($point->microsecond()->toInt())),
        );

        if ($newPoint->month()->numberOfDays() < $point->day()->ofMonth()) {
            return $newPoint->goForward(
                Period::day($newPoint->month()->numberOfDays() - 1),
            );
        }

        return $newPoint->goForward(
            Period::day($point->day()->ofMonth() - 1),
        );
    }

    /**
     * @param int<1, max> $months
     */
    #[\NoDiscard]
    public static function forward(int $months): self
    {
        return new self('goForward', Period::month($months));
    }

    /**
     * @param int<1, max> $months
     */
    #[\NoDiscard]
    public static function backward(int $months): self
    {
        return new self('goBack', Period::month($months));
    }
}
