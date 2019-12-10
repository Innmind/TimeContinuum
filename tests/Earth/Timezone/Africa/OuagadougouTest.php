<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Africa;

use Innmind\TimeContinuum\{
    Earth\Timezone\Africa\Ouagadougou,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class OuagadougouTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Ouagadougou;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
