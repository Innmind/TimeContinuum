<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Europe;

use Innmind\TimeContinuum\{
    Earth\Timezone\Europe\Tiraspol,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class TiraspolTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Tiraspol;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
