<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Asia;

use Innmind\TimeContinuum\{
    Earth\Timezone\Asia\Katmandu,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class KatmanduTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Katmandu;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
