<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Africa;

use Innmind\TimeContinuum\{
    Earth\Timezone\Africa\Ndjamena,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class NdjamenaTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Ndjamena;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
