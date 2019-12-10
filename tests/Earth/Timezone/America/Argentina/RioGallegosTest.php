<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\America\Argentina;

use Innmind\TimeContinuum\{
    Earth\Timezone\America\Argentina\RioGallegos,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class RioGallegosTest extends TestCase
{
    public function testInterface()
    {
        $zone = new RioGallegos;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
