<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Europe;

use Innmind\TimeContinuum\{
    Earth\Timezone\Europe\Guernsey,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class GuernseyTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Guernsey;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
