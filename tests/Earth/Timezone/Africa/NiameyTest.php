<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Africa;

use Innmind\TimeContinuum\{
    Earth\Timezone\Africa\Niamey,
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
