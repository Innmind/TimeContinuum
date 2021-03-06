<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Africa;

use Innmind\TimeContinuum\{
    Earth\Timezone\Africa\Nairobi,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class NairobiTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Nairobi;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
