<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Asia;

use Innmind\TimeContinuum\{
    Earth\Timezone\Asia\UjungPandang,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class UjungPandangTest extends TestCase
{
    public function testInterface()
    {
        $zone = new UjungPandang;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
