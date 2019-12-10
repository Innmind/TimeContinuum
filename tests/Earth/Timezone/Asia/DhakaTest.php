<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Asia;

use Innmind\TimeContinuum\{
    Earth\Timezone\Asia\Dhaka,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class DhakaTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Dhaka;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
