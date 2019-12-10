<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\America;

use Innmind\TimeContinuum\{
    Earth\Timezone\America\Monticello,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class MonticelloTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Monticello;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
