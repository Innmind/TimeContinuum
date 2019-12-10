<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\America;

use Innmind\TimeContinuum\{
    Earth\Timezone\America\PortOfSpain,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class PortOfSpainTest extends TestCase
{
    public function testInterface()
    {
        $zone = new PortOfSpain;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
