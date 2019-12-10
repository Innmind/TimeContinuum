<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\America;

use Innmind\TimeContinuum\{
    Earth\Timezone\America\Atikokan,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class AtikokanTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Atikokan;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
