<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum\Timezone;

use Innmind\TimeContinuum\{
    TimezoneInterface,
    Exception\InvalidTimezoneException
};

final class UTC implements TimezoneInterface
{
    private $hours;
    private $minutes;
    private $string;

    public function __construct(int $hours, int $minutes = 0)
    {
        if (
            $hours < -12 ||
            $hours > 12 ||
            $minutes < 0 ||
            $minutes > 59
        ) {
            throw new InvalidTimezoneException;
        }

        $this->hours = $hours;
        $this->minutes = $minutes;

        if ($hours === 0 && $minutes === 0) {
            $this->string = 'Z';
        } else {
            $this->string = sprintf(
                '%s%02d:%02d',
                $hours > 0 ? '+' : '-',
                abs($hours),
                $minutes
            );
        }
    }

    public function hours(): int
    {
        return $this->hours;
    }

    public function minutes(): int
    {
        return $this->minutes;
    }

    public function __toString(): string
    {
        return $this->string;
    }
}
