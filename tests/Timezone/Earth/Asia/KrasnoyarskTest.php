<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Asia;

use Innmind\TimeContinuum\{
    Timezone\Earth\Asia\Krasnoyarsk,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class KrasnoyarskTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Krasnoyarsk;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
