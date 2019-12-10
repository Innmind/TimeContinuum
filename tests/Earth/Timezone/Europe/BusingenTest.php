<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Europe;

use Innmind\TimeContinuum\{
    Earth\Timezone\Europe\Busingen,
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
