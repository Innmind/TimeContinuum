<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Asia;

use Innmind\TimeContinuum\{
    Earth\Timezone\Asia\UstNera,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class UstNeraTest extends TestCase
{
    public function testInterface()
    {
        $zone = new UstNera;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
