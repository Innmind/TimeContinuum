<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Pacific;

use Innmind\TimeContinuum\{
    Earth\Timezone\Pacific\Saipan,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class SaipanTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Saipan;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
