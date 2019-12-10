<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Africa;

use Innmind\TimeContinuum\{
    Earth\Timezone\Africa\Mbabane,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class MbabaneTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Mbabane;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
