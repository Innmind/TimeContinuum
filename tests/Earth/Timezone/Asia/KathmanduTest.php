<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Asia;

use Innmind\TimeContinuum\{
    Earth\Timezone\Asia\Kathmandu,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class KathmanduTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Kathmandu;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
