<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Africa;

use Innmind\TimeContinuum\{
    Earth\Timezone\Africa\Dakar,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class DakarTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Dakar;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
