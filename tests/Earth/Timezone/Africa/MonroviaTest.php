<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Africa;

use Innmind\TimeContinuum\{
    Earth\Timezone\Africa\Monrovia,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class MonroviaTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Monrovia;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
