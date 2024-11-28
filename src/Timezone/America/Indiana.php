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
    public static function new(callable $of): self
    {
        return new self($of);
    }

    public function vincennes(): Timezone
    {
        return ($this->of)('America/Indiana/Vincennes');
    }

    public function marengo(): Timezone
    {
        return ($this->of)('America/Indiana/Marengo');
    }

    public function tellCity(): Timezone
    {
        return ($this->of)('America/Indiana/Tell_City');
    }

    public function knox(): Timezone
    {
        return ($this->of)('America/Indiana/Knox');
    }

    public function vevay(): Timezone
    {
        return ($this->of)('America/Indiana/Vevay');
    }

    public function indianapolis(): Timezone
    {
        return ($this->of)('America/Indiana/Indianapolis');
    }

    public function petersburg(): Timezone
    {
        return ($this->of)('America/Indiana/Petersburg');
    }

    public function winamac(): Timezone
    {
        return ($this->of)('America/Indiana/Winamac');
    }
}
