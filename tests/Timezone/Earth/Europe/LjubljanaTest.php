<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Europe;

use Innmind\TimeContinuum\{
    Timezone\Earth\Europe\Ljubljana,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class LjubljanaTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Ljubljana;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
