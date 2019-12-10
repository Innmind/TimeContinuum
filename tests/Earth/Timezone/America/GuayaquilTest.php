<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\America;

use Innmind\TimeContinuum\{
    Earth\Timezone\America\Guayaquil,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class GuayaquilTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Guayaquil;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
