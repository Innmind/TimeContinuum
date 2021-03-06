<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Asia;

use Innmind\TimeContinuum\{
    Earth\Timezone\Asia\Dili,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class DiliTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Dili;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
