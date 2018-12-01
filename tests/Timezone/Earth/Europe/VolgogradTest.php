<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Europe;

use Innmind\TimeContinuum\{
    Timezone\Earth\Europe\Volgograd,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class VolgogradTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Volgograd;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
