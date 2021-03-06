<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\America;

use Innmind\TimeContinuum\{
    Earth\Timezone\America\Creston,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class CrestonTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Creston;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
