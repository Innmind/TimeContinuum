<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Pacific;

use Innmind\TimeContinuum\{
    Earth\Timezone\Pacific\Kosrae,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class KosraeTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Kosrae;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
