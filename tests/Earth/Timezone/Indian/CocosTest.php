<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Indian;

use Innmind\TimeContinuum\{
    Earth\Timezone\Indian\Cocos,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class CocosTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Cocos;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
