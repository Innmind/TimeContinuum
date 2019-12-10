<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\America;

use Innmind\TimeContinuum\{
    Earth\Timezone\America\Asuncion,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class AsuncionTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Asuncion;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
