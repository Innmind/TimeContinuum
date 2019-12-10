<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\America;

use Innmind\TimeContinuum\{
    Earth\Timezone\America\Godthab,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class GodthabTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Godthab;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
