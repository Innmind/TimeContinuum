<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\America\NorthDakota;

use Innmind\TimeContinuum\{
    Earth\Timezone\America\NorthDakota\NewSalem,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class NewSalemTest extends TestCase
{
    public function testInterface()
    {
        $zone = new NewSalem;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
