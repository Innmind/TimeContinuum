<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\America;

use Innmind\TimeContinuum\{
    Earth\Timezone\America\Maceio,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class MaceioTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Maceio;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
