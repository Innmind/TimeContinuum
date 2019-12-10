<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\America\Argentina;

use Innmind\TimeContinuum\{
    Earth\Timezone\America\Argentina\Jujuy,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class JujuyTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Jujuy;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
