<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\America;

use Innmind\TimeContinuum\{
    Earth\Timezone\America\Fortaleza,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class FortalezaTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Fortaleza;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
