<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\America;

use Innmind\TimeContinuum\{
    Earth\Timezone\America\Bogota,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class BogotaTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Bogota;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
