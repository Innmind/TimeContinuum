<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Europe;

use Innmind\TimeContinuum\{
    Timezone\Earth\Europe\Paris,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class ParisTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Paris;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
