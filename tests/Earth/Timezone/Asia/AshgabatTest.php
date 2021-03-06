<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Asia;

use Innmind\TimeContinuum\{
    Earth\Timezone\Asia\Ashgabat,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class AshgabatTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Ashgabat;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
