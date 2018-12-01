<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\America;

use Innmind\TimeContinuum\{
    Timezone\Earth\America\Pangnirtung,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class PangnirtungTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Pangnirtung;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
