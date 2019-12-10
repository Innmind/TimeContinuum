<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Asia;

use Innmind\TimeContinuum\{
    Earth\Timezone\Asia\Almaty,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class AlmatyTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Almaty;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
