<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Asia;

use Innmind\TimeContinuum\{
    Earth\Timezone\Asia\Jayapura,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class JayapuraTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Jayapura;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
