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
    public static function new(callable $of): self
    {
        return new self($of);
    }

    public function lindeman(): Timezone
    {
        return ($this->of)('Australia/Lindeman');
    }

    public function currie(): Timezone
    {
        return ($this->of)('Australia/Currie');
    }

    public function victoria(): Timezone
    {
        return ($this->of)('Australia/Victoria');
    }

    public function adelaide(): Timezone
    {
        return ($this->of)('Australia/Adelaide');
    }

    public function perth(): Timezone
    {
        return ($this->of)('Australia/Perth');
    }

    public function brisbane(): Timezone
    {
        return ($this->of)('Australia/Brisbane');
    }

    public function west(): Timezone
    {
        return ($this->of)('Australia/West');
    }

    public function australianCapitalTerritory(): Timezone
    {
        return ($this->of)('Australia/ACT');
    }

    public function north(): Timezone
    {
        return ($this->of)('Australia/North');
    }

    public function eucla(): Timezone
    {
        return ($this->of)('Australia/Eucla');
    }

    public function lordeHoweIsland(): Timezone
    {
        return ($this->of)('Australia/LHI');
    }

    public function newSouthWales(): Timezone
    {
        return ($this->of)('Australia/NSW');
    }

    public function queensland(): Timezone
    {
        return ($this->of)('Australia/Queensland');
    }

    public function south(): Timezone
    {
        return ($this->of)('Australia/South');
    }

    public function melbourne(): Timezone
    {
        return ($this->of)('Australia/Melbourne');
    }

    public function yancowinna(): Timezone
    {
        return ($this->of)('Australia/Yancowinna');
    }

    public function canberra(): Timezone
    {
        return ($this->of)('Australia/Canberra');
    }

    public function sydney(): Timezone
    {
        return ($this->of)('Australia/Sydney');
    }

    public function darwin(): Timezone
    {
        return ($this->of)('Australia/Darwin');
    }

    public function hobart(): Timezone
    {
        return ($this->of)('Australia/Hobart');
    }

    public function brokenHill(): Timezone
    {
        return ($this->of)('Australia/Broken_Hill');
    }

    public function tasmania(): Timezone
    {
        return ($this->of)('Australia/Tasmania');
    }
}
