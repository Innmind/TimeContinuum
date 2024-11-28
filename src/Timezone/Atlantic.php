<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum\Timezone;

use Innmind\TimeContinuum\Timezone;

final class Atlantic
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

    public function faroe(): Timezone
    {
        return ($this->of)('Atlantic/Faroe');
    }

    public function southGeorgia(): Timezone
    {
        return ($this->of)('Atlantic/South_Georgia');
    }

    public function capeVerde(): Timezone
    {
        return ($this->of)('Atlantic/Cape_Verde');
    }

    public function faeroe(): Timezone
    {
        return ($this->of)('Atlantic/Faeroe');
    }

    public function bermuda(): Timezone
    {
        return ($this->of)('Atlantic/Bermuda');
    }

    public function janMayen(): Timezone
    {
        return ($this->of)('Atlantic/Jan_Mayen');
    }

    public function reykjavik(): Timezone
    {
        return ($this->of)('Atlantic/Reykjavik');
    }

    public function saintHelena(): Timezone
    {
        return ($this->of)('Atlantic/St_Helena');
    }

    public function canary(): Timezone
    {
        return ($this->of)('Atlantic/Canary');
    }

    public function madeira(): Timezone
    {
        return ($this->of)('Atlantic/Madeira');
    }

    public function azores(): Timezone
    {
        return ($this->of)('Atlantic/Azores');
    }

    public function stanley(): Timezone
    {
        return ($this->of)('Atlantic/Stanley');
    }
}
