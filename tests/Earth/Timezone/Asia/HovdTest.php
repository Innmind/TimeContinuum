<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Asia;

use Innmind\TimeContinuum\{
    Earth\Timezone\Asia\Hovd,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class HovdTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Hovd;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
