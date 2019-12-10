<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Indian;

use Innmind\TimeContinuum\{
    Earth\Timezone\Indian\Mauritius,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class MauritiusTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Mauritius;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
