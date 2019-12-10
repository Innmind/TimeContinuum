<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\America;

use Innmind\TimeContinuum\{
    Earth\Timezone\America\Jamaica,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class JamaicaTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Jamaica;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
