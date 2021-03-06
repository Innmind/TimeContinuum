<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Asia;

use Innmind\TimeContinuum\{
    Earth\Timezone\Asia\Bahrain,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class BahrainTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Bahrain;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
