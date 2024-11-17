<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum\Earth\Move;

use Innmind\TimeContinuum\{
    PointInTime,
    Period\Hour,
    Period\Minute,
    Period\Second,
    Period\Millisecond,
};

final class StartOfDay
{
    public function __invoke(PointInTime $point): PointInTime
    {
        $seconds = \max($point->second()->toInt() - 1, 0);
        $millisecond = $point->millisecond()->toInt();

        if ($seconds !== 0 && $millisecond === 0) {
            ++$seconds;
        }

        return $point->goBack(
            Hour::of($point->hour()->toInt())
                ->add(Minute::of($point->minute()->toInt()))
                ->add(Second::of($seconds))
                ->add(Millisecond::of($millisecond)),
        );
    }
}
