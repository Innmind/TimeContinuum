<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\America\Indiana;

use Innmind\TimeContinuum\{
    Earth\Timezone\America\Indiana\Marengo,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class MarengoTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Marengo;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
