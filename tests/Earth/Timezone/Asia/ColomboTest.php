<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Asia;

use Innmind\TimeContinuum\{
    Earth\Timezone\Asia\Colombo,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class ColomboTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Colombo;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
