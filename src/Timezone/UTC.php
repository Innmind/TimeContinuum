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
    private $dst = false;
    private $string;

    public function __construct(int $hours = 0, int $minutes = 0)
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
        $this->string = $this->format($hours, $minutes);
    }

    public static function daylightSavingTime(int $hours, int $minutes = 0): self
    {
        $self = new self($hours, $minutes);
        $self->dst = true;

        return $self;
    }

    public static function fromString(string $zone): self
    {
        if (mb_strtolower($zone) === 'z') {
            return new self;
        }

        list($hours, $minutes) = explode(':', $zone);

        return new self((int) $hours, (int) $minutes);
    }

    public function hours(): int
    {
        return $this->hours;
    }

    public function minutes(): int
    {
        return $this->minutes;
    }

    public function daylightSavingTimeApplied(): bool
    {
        return $this->dst;
    }

    public function __toString(): string
    {
        return $this->string;
    }

    private function format(int $hours, int $minutes): string
    {
        if ($hours === 0 && $minutes === 0) {
            return 'Z';
        }

        return sprintf(
            '%s%02d:%02d',
            $hours > 0 ? '+' : '-',
            abs($hours),
            $minutes
        );
    }
}
