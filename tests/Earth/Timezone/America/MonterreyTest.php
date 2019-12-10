<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\America;

use Innmind\TimeContinuum\{
    Earth\Timezone\America\Monterrey,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class MonterreyTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Monterrey;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
