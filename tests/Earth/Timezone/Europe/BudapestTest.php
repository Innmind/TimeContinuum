<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Europe;

use Innmind\TimeContinuum\{
    Earth\Timezone\Europe\Budapest,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class BudapestTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Budapest;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
