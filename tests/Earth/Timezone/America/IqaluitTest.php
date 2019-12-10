<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\America;

use Innmind\TimeContinuum\{
    Earth\Timezone\America\Iqaluit,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class IqaluitTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Iqaluit;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
