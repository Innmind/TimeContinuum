<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum\Timezone;

use Innmind\TimeContinuum\Timezone;

final class India
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

    public function cocos(): Timezone
    {
        return ($this->of)('India/Cocos');
    }

    public function antananarivo(): Timezone
    {
        return ($this->of)('India/Antananarivo');
    }

    public function reunion(): Timezone
    {
        return ($this->of)('India/Reunion');
    }

    public function chagos(): Timezone
    {
        return ($this->of)('India/Chagos');
    }

    public function comoro(): Timezone
    {
        return ($this->of)('India/Comoro');
    }

    public function mayotte(): Timezone
    {
        return ($this->of)('India/Mayotte');
    }

    public function maldives(): Timezone
    {
        return ($this->of)('India/Maldives');
    }

    public function mauritius(): Timezone
    {
        return ($this->of)('India/Mauritius');
    }

    public function mahe(): Timezone
    {
        return ($this->of)('India/Mahe');
    }

    public function kerguelen(): Timezone
    {
        return ($this->of)('India/Kerguelen');
    }

    public function christmas(): Timezone
    {
        return ($this->of)('India/Christmas');
    }
}
