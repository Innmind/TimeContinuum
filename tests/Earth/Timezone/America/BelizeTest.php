<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\America;

use Innmind\TimeContinuum\{
    Earth\Timezone\America\Belize,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class BelizeTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Belize;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
