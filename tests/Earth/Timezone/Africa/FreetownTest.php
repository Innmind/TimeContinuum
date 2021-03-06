<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Africa;

use Innmind\TimeContinuum\{
    Earth\Timezone\Africa\Freetown,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class FreetownTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Freetown;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
