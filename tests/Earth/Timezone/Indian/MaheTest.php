<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Indian;

use Innmind\TimeContinuum\{
    Earth\Timezone\Indian\Mahe,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class MaheTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Mahe;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
