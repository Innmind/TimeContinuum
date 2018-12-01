<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Europe;

use Innmind\TimeContinuum\{
    Timezone\Earth\Europe\Busingen,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class BusingenTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Busingen;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
