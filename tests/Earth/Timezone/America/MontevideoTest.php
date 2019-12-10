<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\America;

use Innmind\TimeContinuum\{
    Earth\Timezone\America\Montevideo,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class MontevideoTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Montevideo;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
