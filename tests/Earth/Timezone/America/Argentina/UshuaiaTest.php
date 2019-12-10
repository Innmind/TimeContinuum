<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\America\Argentina;

use Innmind\TimeContinuum\{
    Earth\Timezone\America\Argentina\Ushuaia,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class UshuaiaTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Ushuaia;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
