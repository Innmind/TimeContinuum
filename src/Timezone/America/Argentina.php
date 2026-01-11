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
    #[\NoDiscard]
    public static function new(callable $of): self
    {
        return new self($of);
    }

    #[\NoDiscard]
    public function rioGallegos(): Timezone
    {
        return ($this->of)('America/Argentina/Rio_Gallegos');
    }

    #[\NoDiscard]
    public function mendoza(): Timezone
    {
        return ($this->of)('America/Argentina/Mendoza');
    }

    #[\NoDiscard]
    public function buenosAires(): Timezone
    {
        return ($this->of)('America/Argentina/Buenos_Aires');
    }

    #[\NoDiscard]
    public function ushuaia(): Timezone
    {
        return ($this->of)('America/Argentina/Ushuaia');
    }

    #[\NoDiscard]
    public function sanJuan(): Timezone
    {
        return ($this->of)('America/Argentina/San_Juan');
    }

    #[\NoDiscard]
    public function laRioja(): Timezone
    {
        return ($this->of)('America/Argentina/La_Rioja');
    }

    #[\NoDiscard]
    public function salta(): Timezone
    {
        return ($this->of)('America/Argentina/Salta');
    }

    #[\NoDiscard]
    public function sanLuis(): Timezone
    {
        return ($this->of)('America/Argentina/San_Luis');
    }

    #[\NoDiscard]
    public function jujuy(): Timezone
    {
        return ($this->of)('America/Argentina/Jujuy');
    }

    #[\NoDiscard]
    public function tucuman(): Timezone
    {
        return ($this->of)('America/Argentina/Tucuman');
    }

    #[\NoDiscard]
    public function comodRivadavia(): Timezone
    {
        return ($this->of)('America/Argentina/ComodRivadavia');
    }

    #[\NoDiscard]
    public function catamarca(): Timezone
    {
        return ($this->of)('America/Argentina/Catamarca');
    }

    #[\NoDiscard]
    public function cordoba(): Timezone
    {
        return ($this->of)('America/Argentina/Cordoba');
    }
}
