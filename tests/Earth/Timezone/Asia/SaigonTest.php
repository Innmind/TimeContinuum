<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Asia;

use Innmind\TimeContinuum\{
    Earth\Timezone\Asia\Saigon,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class SaigonTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Saigon;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
