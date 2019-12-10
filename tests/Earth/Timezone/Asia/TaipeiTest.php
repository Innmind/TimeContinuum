<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Asia;

use Innmind\TimeContinuum\{
    Earth\Timezone\Asia\Taipei,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class TaipeiTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Taipei;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
