<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Europe;

use Innmind\TimeContinuum\{
    Earth\Timezone\Europe\Riga,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class RigaTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Riga;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
