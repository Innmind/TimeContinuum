<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\America;

use Innmind\TimeContinuum\{
    Earth\Timezone\America\Dominica,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class DominicaTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Dominica;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
