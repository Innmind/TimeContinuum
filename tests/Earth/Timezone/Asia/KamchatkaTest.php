<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Asia;

use Innmind\TimeContinuum\{
    Earth\Timezone\Asia\Kamchatka,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class KamchatkaTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Kamchatka;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
