<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Europe;

use Innmind\TimeContinuum\{
    Earth\Timezone\Europe\Jersey,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class JerseyTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Jersey;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
