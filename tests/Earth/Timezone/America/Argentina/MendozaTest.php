<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\America\Argentina;

use Innmind\TimeContinuum\{
    Earth\Timezone\America\Argentina\Mendoza,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class MendozaTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Mendoza;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
