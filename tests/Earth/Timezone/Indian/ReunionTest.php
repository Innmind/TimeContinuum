<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Indian;

use Innmind\TimeContinuum\{
    Earth\Timezone\Indian\Reunion,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class ReunionTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Reunion;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
