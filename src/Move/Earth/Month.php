<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum\Move\Earth;

use Innmind\TimeContinuum\{
    PointInTimeInterface,
    Period\Earth\Day,
    Period\Earth\Hour,
    Period\Earth\Minute,
    Period\Earth\Second,
    Period\Earth\Millisecond,
    Period\Earth\Month as Period,
};

final class Month
{
    private $direction;
    private $months;

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

    public function __invoke(PointInTimeInterface $point): PointInTimeInterface
    {
        $newPoint = (new StartOfMonth)($point)->{$this->direction}($this->months);
        $newPoint = $newPoint->goForward(
            (new Hour($point->hour()->toInt()))
                ->add(new Minute($point->minute()->toInt()))
                ->add(new Second($point->second()->toInt()))
                ->add(new Millisecond($point->millisecond()->toInt()))
        );

        if ($newPoint->month()->numberOfDays() < $point->day()->toInt()) {
            return $newPoint->goForward(
                new Day($newPoint->month()->numberOfDays() - 1)
            );
        }

        return $newPoint->goForward(
            new Day($point->day()->toInt() - 1)
        );
    }
}
