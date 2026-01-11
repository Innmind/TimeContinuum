<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum;

use Innmind\TimeContinuum\Timezone\{
    Africa,
    America,
    Antartica,
    Arctic,
    Asia,
    Atlantic,
    Australia,
    Europe,
    Indian,
    Pacific,
};

final class Timezones
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
    public function utc(): Timezone
    {
        return ($this->of)('UTC');
    }

    #[\NoDiscard]
    public function africa(): Africa
    {
        return Africa::new($this->of);
    }

    #[\NoDiscard]
    public function america(): America
    {
        return America::new($this->of);
    }

    #[\NoDiscard]
    public function antartica(): Antartica
    {
        return Antartica::new($this->of);
    }

    #[\NoDiscard]
    public function arctic(): Arctic
    {
        return Arctic::new($this->of);
    }

    #[\NoDiscard]
    public function asia(): Asia
    {
        return Asia::new($this->of);
    }

    #[\NoDiscard]
    public function atlantic(): Atlantic
    {
        return Atlantic::new($this->of);
    }

    #[\NoDiscard]
    public function australia(): Australia
    {
        return Australia::new($this->of);
    }

    #[\NoDiscard]
    public function europe(): Europe
    {
        return Europe::new($this->of);
    }

    #[\NoDiscard]
    public function indian(): Indian
    {
        return Indian::new($this->of);
    }

    #[\NoDiscard]
    public function pacific(): Pacific
    {
        return Pacific::new($this->of);
    }
}
