<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\America;

use Innmind\TimeContinuum\{
    Earth\Timezone\America\Anchorage,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class AnchorageTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Anchorage;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
