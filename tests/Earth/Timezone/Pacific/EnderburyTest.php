<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Pacific;

use Innmind\TimeContinuum\{
    Earth\Timezone\Pacific\Enderbury,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class EnderburyTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Enderbury;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
