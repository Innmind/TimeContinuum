<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Africa;

use Innmind\TimeContinuum\{
    Earth\Timezone\Africa\Accra,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class AccraTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Accra;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
