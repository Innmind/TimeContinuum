<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Asia;

use Innmind\TimeContinuum\{
    Earth\Timezone\Asia\Magadan,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class MagadanTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Magadan;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
