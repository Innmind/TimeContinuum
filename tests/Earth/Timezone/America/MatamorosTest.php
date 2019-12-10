<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\America;

use Innmind\TimeContinuum\{
    Earth\Timezone\America\Matamoros,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class MatamorosTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Matamoros;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
