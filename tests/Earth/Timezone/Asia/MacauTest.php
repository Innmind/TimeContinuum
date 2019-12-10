<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Asia;

use Innmind\TimeContinuum\{
    Earth\Timezone\Asia\Macau,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class MacauTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Macau;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
