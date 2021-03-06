<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Pacific;

use Innmind\TimeContinuum\{
    Earth\Timezone\Pacific\Tongatapu,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class TongatapuTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Tongatapu;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
