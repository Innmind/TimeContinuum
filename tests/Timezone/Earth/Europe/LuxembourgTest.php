<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Europe;

use Innmind\TimeContinuum\{
    Timezone\Earth\Europe\Luxembourg,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class LuxembourgTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Luxembourg;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
