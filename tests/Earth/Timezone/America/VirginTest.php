<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\America;

use Innmind\TimeContinuum\{
    Earth\Timezone\America\Virgin,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class VirginTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Virgin;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
