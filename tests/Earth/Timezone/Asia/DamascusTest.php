<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Asia;

use Innmind\TimeContinuum\{
    Earth\Timezone\Asia\Damascus,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class DamascusTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Damascus;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
