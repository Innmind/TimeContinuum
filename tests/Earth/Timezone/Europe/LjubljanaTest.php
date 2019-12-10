<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Europe;

use Innmind\TimeContinuum\{
    Earth\Timezone\Europe\Ljubljana,
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
