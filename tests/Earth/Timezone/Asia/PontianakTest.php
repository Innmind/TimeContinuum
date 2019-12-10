<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Asia;

use Innmind\TimeContinuum\{
    Earth\Timezone\Asia\Pontianak,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class PontianakTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Pontianak;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
