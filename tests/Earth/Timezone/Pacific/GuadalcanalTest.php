<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Pacific;

use Innmind\TimeContinuum\{
    Earth\Timezone\Pacific\Guadalcanal,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class GuadalcanalTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Guadalcanal;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
