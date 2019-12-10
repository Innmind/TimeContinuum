<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Asia;

use Innmind\TimeContinuum\{
    Earth\Timezone\Asia\Khandyga,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class KhandygaTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Khandyga;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
