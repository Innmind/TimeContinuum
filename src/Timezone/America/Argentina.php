<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum\Timezone\America;

use Innmind\TimeContinuum\Timezone;

final class Argentina
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

    public function rioGallegos(): Timezone
    {
        return ($this->of)('America/Argentina/Rio_Gallegos');
    }

    public function mendoza(): Timezone
    {
        return ($this->of)('America/Argentina/Mendoza');
    }

    public function buenosAires(): Timezone
    {
        return ($this->of)('America/Argentina/Buenos_Aires');
    }

    public function ushuaia(): Timezone
    {
        return ($this->of)('America/Argentina/Ushuaia');
    }

    public function sanJuan(): Timezone
    {
        return ($this->of)('America/Argentina/San_Juan');
    }

    public function laRioja(): Timezone
    {
        return ($this->of)('America/Argentina/La_Rioja');
    }

    public function salta(): Timezone
    {
        return ($this->of)('America/Argentina/Salta');
    }

    public function sanLuis(): Timezone
    {
        return ($this->of)('America/Argentina/San_Luis');
    }

    public function jujuy(): Timezone
    {
        return ($this->of)('America/Argentina/Jujuy');
    }

    public function tucuman(): Timezone
    {
        return ($this->of)('America/Argentina/Tucuman');
    }

    public function comodRivadavia(): Timezone
    {
        return ($this->of)('America/Argentina/ComodRivadavia');
    }

    public function catamarca(): Timezone
    {
        return ($this->of)('America/Argentina/Catamarca');
    }

    public function cordoba(): Timezone
    {
        return ($this->of)('America/Argentina/Cordoba');
    }
}
