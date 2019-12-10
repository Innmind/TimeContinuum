<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum\Earth\Move;

use Innmind\TimeContinuum\{
    PointInTime,
    Earth\Period\Hour,
    Earth\Period\Minute,
    Earth\Period\Second,
    Earth\Period\Millisecond,
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
            (new Hour($point->hour()->toInt()))
                ->add(new Minute($point->minute()->toInt()))
                ->add(new Second($seconds))
                ->add(new Millisecond($millisecond)),
        );
    }
}
