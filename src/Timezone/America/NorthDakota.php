<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum\Timezone\America;

use Innmind\TimeContinuum\Timezone;

final class NorthDakota
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

    public function beulah(): Timezone
    {
        return ($this->of)('America/North_Dakota/Beulah');
    }

    public function newSalem(): Timezone
    {
        return ($this->of)('America/North_Dakota/New_Salem');
    }

    public function center(): Timezone
    {
        return ($this->of)('America/North_Dakota/Center');
    }
}
