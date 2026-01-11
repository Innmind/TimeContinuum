<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum\Timezone;

use Innmind\TimeContinuum\Timezone;

final class Indian
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
    public function cocos(): Timezone
    {
        return ($this->of)('Indian/Cocos');
    }

    #[\NoDiscard]
    public function antananarivo(): Timezone
    {
        return ($this->of)('Indian/Antananarivo');
    }

    #[\NoDiscard]
    public function reunion(): Timezone
    {
        return ($this->of)('Indian/Reunion');
    }

    #[\NoDiscard]
    public function chagos(): Timezone
    {
        return ($this->of)('Indian/Chagos');
    }

    #[\NoDiscard]
    public function comoro(): Timezone
    {
        return ($this->of)('Indian/Comoro');
    }

    #[\NoDiscard]
    public function mayotte(): Timezone
    {
        return ($this->of)('Indian/Mayotte');
    }

    #[\NoDiscard]
    public function maldives(): Timezone
    {
        return ($this->of)('Indian/Maldives');
    }

    #[\NoDiscard]
    public function mauritius(): Timezone
    {
        return ($this->of)('Indian/Mauritius');
    }

    #[\NoDiscard]
    public function mahe(): Timezone
    {
        return ($this->of)('Indian/Mahe');
    }

    #[\NoDiscard]
    public function kerguelen(): Timezone
    {
        return ($this->of)('Indian/Kerguelen');
    }

    #[\NoDiscard]
    public function christmas(): Timezone
    {
        return ($this->of)('Indian/Christmas');
    }
}
