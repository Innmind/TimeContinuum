<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\America;

use Innmind\TimeContinuum\{
    Timezone\Earth\America\CoralHarbour,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class CoralHarbourTest extends TestCase
{
    public function testInterface()
    {
        $zone = new CoralHarbour;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
