<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum\Timezone;

use Innmind\TimeContinuum\Timezone;

final class Antartica
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
    public function davis(): Timezone
    {
        return ($this->of)('Antarctica/Davis');
    }

    #[\NoDiscard]
    public function palmer(): Timezone
    {
        return ($this->of)('Antarctica/Palmer');
    }

    #[\NoDiscard]
    public function syowa(): Timezone
    {
        return ($this->of)('Antarctica/Syowa');
    }

    #[\NoDiscard]
    public function casey(): Timezone
    {
        return ($this->of)('Antarctica/Casey');
    }

    #[\NoDiscard]
    public function troll(): Timezone
    {
        return ($this->of)('Antarctica/Troll');
    }

    #[\NoDiscard]
    public function mcMurdo(): Timezone
    {
        return ($this->of)('Antarctica/McMurdo');
    }

    #[\NoDiscard]
    public function vostok(): Timezone
    {
        return ($this->of)('Antarctica/Vostok');
    }

    #[\NoDiscard]
    public function rothera(): Timezone
    {
        return ($this->of)('Antarctica/Rothera');
    }

    #[\NoDiscard]
    public function mawson(): Timezone
    {
        return ($this->of)('Antarctica/Mawson');
    }

    #[\NoDiscard]
    public function macquarie(): Timezone
    {
        return ($this->of)('Antarctica/Macquarie');
    }

    #[\NoDiscard]
    public function southPole(): Timezone
    {
        return ($this->of)('Antarctica/South_Pole');
    }

    #[\NoDiscard]
    public function dumontDUrville(): Timezone
    {
        return ($this->of)('Antarctica/DumontDUrville');
    }
}
