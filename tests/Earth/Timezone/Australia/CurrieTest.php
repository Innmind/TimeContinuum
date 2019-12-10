<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Australia;

use Innmind\TimeContinuum\{
    Earth\Timezone\Australia\Currie,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class CurrieTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Currie;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
