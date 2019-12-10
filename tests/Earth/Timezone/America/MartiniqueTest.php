<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\America;

use Innmind\TimeContinuum\{
    Earth\Timezone\America\Martinique,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class MartiniqueTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Martinique;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
