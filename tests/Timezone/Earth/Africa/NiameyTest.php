<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Africa;

use Innmind\TimeContinuum\{
    Timezone\Earth\Africa\Niamey,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class NiameyTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Niamey;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
