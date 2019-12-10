<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Pacific;

use Innmind\TimeContinuum\{
    Earth\Timezone\Pacific\Noumea,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class NoumeaTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Noumea;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
