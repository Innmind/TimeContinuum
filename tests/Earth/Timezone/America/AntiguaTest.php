<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\America;

use Innmind\TimeContinuum\{
    Earth\Timezone\America\Antigua,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class AntiguaTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Antigua;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
