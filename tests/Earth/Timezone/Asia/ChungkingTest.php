<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Asia;

use Innmind\TimeContinuum\{
    Earth\Timezone\Asia\Chungking,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class ChungkingTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Chungking;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
