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
        return ($this->of)('Indian/Cocos');
    }

    public function antananarivo(): Timezone
    {
        return ($this->of)('Indian/Antananarivo');
    }

    public function reunion(): Timezone
    {
        return ($this->of)('Indian/Reunion');
    }

    public function chagos(): Timezone
    {
        return ($this->of)('Indian/Chagos');
    }

    public function comoro(): Timezone
    {
        return ($this->of)('Indian/Comoro');
    }

    public function mayotte(): Timezone
    {
        return ($this->of)('Indian/Mayotte');
    }

    public function maldives(): Timezone
    {
        return ($this->of)('Indian/Maldives');
    }

    public function mauritius(): Timezone
    {
        return ($this->of)('Indian/Mauritius');
    }

    public function mahe(): Timezone
    {
        return ($this->of)('Indian/Mahe');
    }

    public function kerguelen(): Timezone
    {
        return ($this->of)('Indian/Kerguelen');
    }

    public function christmas(): Timezone
    {
        return ($this->of)('Indian/Christmas');
    }
}
