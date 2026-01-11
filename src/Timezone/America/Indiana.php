<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum\Timezone\America;

use Innmind\TimeContinuum\Timezone;

final class Indiana
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
    public function vincennes(): Timezone
    {
        return ($this->of)('America/Indiana/Vincennes');
    }

    #[\NoDiscard]
    public function marengo(): Timezone
    {
        return ($this->of)('America/Indiana/Marengo');
    }

    #[\NoDiscard]
    public function tellCity(): Timezone
    {
        return ($this->of)('America/Indiana/Tell_City');
    }

    #[\NoDiscard]
    public function knox(): Timezone
    {
        return ($this->of)('America/Indiana/Knox');
    }

    #[\NoDiscard]
    public function vevay(): Timezone
    {
        return ($this->of)('America/Indiana/Vevay');
    }

    #[\NoDiscard]
    public function indianapolis(): Timezone
    {
        return ($this->of)('America/Indiana/Indianapolis');
    }

    #[\NoDiscard]
    public function petersburg(): Timezone
    {
        return ($this->of)('America/Indiana/Petersburg');
    }

    #[\NoDiscard]
    public function winamac(): Timezone
    {
        return ($this->of)('America/Indiana/Winamac');
    }
}
