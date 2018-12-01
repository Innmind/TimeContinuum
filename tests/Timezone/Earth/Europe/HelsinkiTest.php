<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Europe;

use Innmind\TimeContinuum\{
    Timezone\Earth\Europe\Helsinki,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class HelsinkiTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Helsinki;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
