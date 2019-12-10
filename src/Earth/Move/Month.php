<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum\Earth\Move;

use Innmind\TimeContinuum\{
    PointInTime,
    Earth\Period\Day,
    Earth\Period\Hour,
    Earth\Period\Minute,
    Earth\Period\Second,
    Earth\Period\Millisecond,
    Earth\Period\Month as Period,
};

final class Month
{
    private string $direction;
    private Period $months;

    private function __construct(string $direction, Period $months)
    {
        $this->direction = $direction;
        $this->months = $months;
    }

    public static function forward(int $months): self
    {
        return new self('goForward', new Period($months));
    }

    public static function backward(int $months): self
    {
        return new self('goBack', new Period($months));
    }

    public function __invoke(PointInTime $point): PointInTime
    {
        /** @var PointInTime $newPoint */
        $newPoint = (new StartOfMonth)($point)->{$this->direction}($this->months);
        $newPoint = $newPoint->goForward(
            (new Hour($point->hour()->toInt()))
                ->add(new Minute($point->minute()->toInt()))
                ->add(new Second($point->second()->toInt()))
                ->add(new Millisecond($point->millisecond()->toInt())),
        );

        if ($newPoint->month()->numberOfDays() < $point->day()->toInt()) {
            return $newPoint->goForward(
                new Day($newPoint->month()->numberOfDays() - 1),
            );
        }

        return $newPoint->goForward(
            new Day($point->day()->toInt() - 1),
        );
    }
}
