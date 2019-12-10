<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Asia;

use Innmind\TimeContinuum\{
    Earth\Timezone\Asia\Shanghai,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class ShanghaiTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Shanghai;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
