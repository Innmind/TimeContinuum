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
    public static function new(callable $of): self
    {
        return new self($of);
    }

    public function davis(): Timezone
    {
        return ($this->of)('Antarctica/Davis');
    }

    public function palmer(): Timezone
    {
        return ($this->of)('Antarctica/Palmer');
    }

    public function syowa(): Timezone
    {
        return ($this->of)('Antarctica/Syowa');
    }

    public function casey(): Timezone
    {
        return ($this->of)('Antarctica/Casey');
    }

    public function troll(): Timezone
    {
        return ($this->of)('Antarctica/Troll');
    }

    public function mcMurdo(): Timezone
    {
        return ($this->of)('Antarctica/McMurdo');
    }

    public function vostok(): Timezone
    {
        return ($this->of)('Antarctica/Vostok');
    }

    public function rothera(): Timezone
    {
        return ($this->of)('Antarctica/Rothera');
    }

    public function mawson(): Timezone
    {
        return ($this->of)('Antarctica/Mawson');
    }

    public function macquarie(): Timezone
    {
        return ($this->of)('Antarctica/Macquarie');
    }

    public function southPole(): Timezone
    {
        return ($this->of)('Antarctica/South_Pole');
    }

    public function dumontDUrville(): Timezone
    {
        return ($this->of)('Antarctica/DumontDUrville');
    }
}
