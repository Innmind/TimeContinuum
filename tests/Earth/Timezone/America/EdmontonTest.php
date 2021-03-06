<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\America;

use Innmind\TimeContinuum\{
    Earth\Timezone\America\Edmonton,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class EdmontonTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Edmonton;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
