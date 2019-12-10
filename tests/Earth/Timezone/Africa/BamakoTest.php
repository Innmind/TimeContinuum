<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Africa;

use Innmind\TimeContinuum\{
    Earth\Timezone\Africa\Bamako,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class BamakoTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Bamako;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
