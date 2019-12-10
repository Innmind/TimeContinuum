<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\America;

use Innmind\TimeContinuum\{
    Earth\Timezone\America\Recife,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class RecifeTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Recife;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
