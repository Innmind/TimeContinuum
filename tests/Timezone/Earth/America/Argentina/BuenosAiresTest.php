<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\America\Argentina;

use Innmind\TimeContinuum\{
    Timezone\Earth\America\Argentina\BuenosAires,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class BuenosAiresTest extends TestCase
{
    public function testInterface()
    {
        $zone = new BuenosAires;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
