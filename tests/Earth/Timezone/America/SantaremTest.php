<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\America;

use Innmind\TimeContinuum\{
    Earth\Timezone\America\Santarem,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class SantaremTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Santarem;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
