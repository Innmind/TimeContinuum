<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\America;

use Innmind\TimeContinuum\{
    Earth\Timezone\America\Tortola,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class TortolaTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Tortola;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
