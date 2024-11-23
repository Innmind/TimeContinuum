<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum\Move;

use Innmind\TimeContinuum\{
    PointInTime,
    Period,
    Period\Day,
    Period\Hour,
    Period\Minute,
    Period\Second,
    Period\Millisecond,
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

    public function __invoke(PointInTime $point): PointInTime
    {
        /** @var PointInTime $newPoint */
        $newPoint = (new StartOfMonth)($point)->{$this->direction}($this->months);
        $newPoint = $newPoint->goForward(
            Hour::of($point->hour()->toInt())
                ->add(Minute::of($point->minute()->toInt()))
                ->add(Second::of($point->second()->toInt()))
                ->add(Millisecond::of($point->millisecond()->toInt())),
        );

        if ($newPoint->month()->numberOfDays() < $point->day()->ofMonth()) {
            return $newPoint->goForward(
                Day::of($newPoint->month()->numberOfDays() - 1),
            );
        }

        return $newPoint->goForward(
            Day::of($point->day()->ofMonth() - 1),
        );
    }

    /**
     * @param int<1, max> $months
     */
    public static function forward(int $months): self
    {
        return new self('goForward', Period\Month::of($months));
    }

    /**
     * @param int<1, max> $months
     */
    public static function backward(int $months): self
    {
        return new self('goBack', Period\Month::of($months));
    }
}
