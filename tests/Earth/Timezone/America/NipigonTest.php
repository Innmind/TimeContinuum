<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\America;

use Innmind\TimeContinuum\{
    Earth\Timezone\America\Nipigon,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class NipigonTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Nipigon;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
