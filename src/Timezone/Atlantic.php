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
    #[\NoDiscard]
    public static function new(callable $of): self
    {
        return new self($of);
    }

    #[\NoDiscard]
    public function faroe(): Timezone
    {
        return ($this->of)('Atlantic/Faroe');
    }

    #[\NoDiscard]
    public function southGeorgia(): Timezone
    {
        return ($this->of)('Atlantic/South_Georgia');
    }

    #[\NoDiscard]
    public function capeVerde(): Timezone
    {
        return ($this->of)('Atlantic/Cape_Verde');
    }

    #[\NoDiscard]
    public function faeroe(): Timezone
    {
        return ($this->of)('Atlantic/Faeroe');
    }

    #[\NoDiscard]
    public function bermuda(): Timezone
    {
        return ($this->of)('Atlantic/Bermuda');
    }

    #[\NoDiscard]
    public function janMayen(): Timezone
    {
        return ($this->of)('Atlantic/Jan_Mayen');
    }

    #[\NoDiscard]
    public function reykjavik(): Timezone
    {
        return ($this->of)('Atlantic/Reykjavik');
    }

    #[\NoDiscard]
    public function saintHelena(): Timezone
    {
        return ($this->of)('Atlantic/St_Helena');
    }

    #[\NoDiscard]
    public function canary(): Timezone
    {
        return ($this->of)('Atlantic/Canary');
    }

    #[\NoDiscard]
    public function madeira(): Timezone
    {
        return ($this->of)('Atlantic/Madeira');
    }

    #[\NoDiscard]
    public function azores(): Timezone
    {
        return ($this->of)('Atlantic/Azores');
    }

    #[\NoDiscard]
    public function stanley(): Timezone
    {
        return ($this->of)('Atlantic/Stanley');
    }
}
