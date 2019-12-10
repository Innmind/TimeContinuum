<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Asia;

use Innmind\TimeContinuum\{
    Earth\Timezone\Asia\Hebron,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class HebronTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Hebron;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
