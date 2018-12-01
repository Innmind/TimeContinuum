<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Europe;

use Innmind\TimeContinuum\{
    Timezone\Earth\Europe\Zurich,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class ZurichTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Zurich;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
