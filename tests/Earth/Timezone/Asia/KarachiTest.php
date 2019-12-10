<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Asia;

use Innmind\TimeContinuum\{
    Earth\Timezone\Asia\Karachi,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class KarachiTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Karachi;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
