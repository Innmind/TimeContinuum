<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Asia;

use Innmind\TimeContinuum\{
    Earth\Timezone\Asia\Brunei,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class BruneiTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Brunei;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
