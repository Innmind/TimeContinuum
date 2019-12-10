<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\America;

use Innmind\TimeContinuum\{
    Earth\Timezone\America\Rosario,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class RosarioTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Rosario;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
