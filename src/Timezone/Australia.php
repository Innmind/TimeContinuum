<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum\Timezone;

use Innmind\TimeContinuum\Timezone;

final class Australia
{
    /**
     * @param callable(non-empty-string): Timezone $of
     */
    private function __construct(
        private $of,
    ) {
    }

    /**
     * @internal
     *
     * @param callable(non-empty-string): Timezone $of
     */
    #[\NoDiscard]
    public static function new(callable $of): self
    {
        return new self($of);
    }

    #[\NoDiscard]
    public function lindeman(): Timezone
    {
        return ($this->of)('Australia/Lindeman');
    }

    #[\NoDiscard]
    public function currie(): Timezone
    {
        return ($this->of)('Australia/Currie');
    }

    #[\NoDiscard]
    public function victoria(): Timezone
    {
        return ($this->of)('Australia/Victoria');
    }

    #[\NoDiscard]
    public function adelaide(): Timezone
    {
        return ($this->of)('Australia/Adelaide');
    }

    #[\NoDiscard]
    public function perth(): Timezone
    {
        return ($this->of)('Australia/Perth');
    }

    #[\NoDiscard]
    public function brisbane(): Timezone
    {
        return ($this->of)('Australia/Brisbane');
    }

    #[\NoDiscard]
    public function west(): Timezone
    {
        return ($this->of)('Australia/West');
    }

    #[\NoDiscard]
    public function australianCapitalTerritory(): Timezone
    {
        return ($this->of)('Australia/ACT');
    }

    #[\NoDiscard]
    public function north(): Timezone
    {
        return ($this->of)('Australia/North');
    }

    #[\NoDiscard]
    public function eucla(): Timezone
    {
        return ($this->of)('Australia/Eucla');
    }

    #[\NoDiscard]
    public function lordeHoweIsland(): Timezone
    {
        return ($this->of)('Australia/LHI');
    }

    #[\NoDiscard]
    public function newSouthWales(): Timezone
    {
        return ($this->of)('Australia/NSW');
    }

    #[\NoDiscard]
    public function queensland(): Timezone
    {
        return ($this->of)('Australia/Queensland');
    }

    #[\NoDiscard]
    public function south(): Timezone
    {
        return ($this->of)('Australia/South');
    }

    #[\NoDiscard]
    public function melbourne(): Timezone
    {
        return ($this->of)('Australia/Melbourne');
    }

    #[\NoDiscard]
    public function yancowinna(): Timezone
    {
        return ($this->of)('Australia/Yancowinna');
    }

    #[\NoDiscard]
    public function canberra(): Timezone
    {
        return ($this->of)('Australia/Canberra');
    }

    #[\NoDiscard]
    public function sydney(): Timezone
    {
        return ($this->of)('Australia/Sydney');
    }

    #[\NoDiscard]
    public function darwin(): Timezone
    {
        return ($this->of)('Australia/Darwin');
    }

    #[\NoDiscard]
    public function hobart(): Timezone
    {
        return ($this->of)('Australia/Hobart');
    }

    #[\NoDiscard]
    public function brokenHill(): Timezone
    {
        return ($this->of)('Australia/Broken_Hill');
    }

    #[\NoDiscard]
    public function tasmania(): Timezone
    {
        return ($this->of)('Australia/Tasmania');
    }
}
