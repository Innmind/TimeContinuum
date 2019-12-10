<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Europe;

use Innmind\TimeContinuum\{
    Earth\Timezone\Europe\Samara,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class SamaraTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Samara;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
