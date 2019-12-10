<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Europe;

use Innmind\TimeContinuum\{
    Earth\Timezone\Europe\Chisinau,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class ChisinauTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Chisinau;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
