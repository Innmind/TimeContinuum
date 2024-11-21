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
    India,
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
    public static function new(callable $of): self
    {
        return new self($of);
    }

    public function utc(): Timezone
    {
        return ($this->of)('UTC');
    }

    public function africa(): Africa
    {
        return Africa::new($this->of);
    }

    public function america(): America
    {
        return America::new($this->of);
    }

    public function antartica(): Antartica
    {
        return Antartica::new($this->of);
    }

    public function arctic(): Arctic
    {
        return Arctic::new($this->of);
    }

    public function asia(): Asia
    {
        return Asia::new($this->of);
    }

    public function atlantic(): Atlantic
    {
        return Atlantic::new($this->of);
    }

    public function australia(): Australia
    {
        return Australia::new($this->of);
    }

    public function europe(): Europe
    {
        return Europe::new($this->of);
    }

    public function india(): India
    {
        return India::new($this->of);
    }

    public function pacific(): Pacific
    {
        return Pacific::new($this->of);
    }
}
