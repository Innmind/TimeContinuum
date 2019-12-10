<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Europe;

use Innmind\TimeContinuum\{
    Earth\Timezone\Europe\Zaporozhye,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class ZaporozhyeTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Zaporozhye;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
