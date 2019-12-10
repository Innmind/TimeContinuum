<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\America;

use Innmind\TimeContinuum\{
    Earth\Timezone\America\LaPaz,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class LaPazTest extends TestCase
{
    public function testInterface()
    {
        $zone = new LaPaz;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
