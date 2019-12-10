<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Asia;

use Innmind\TimeContinuum\{
    Earth\Timezone\Asia\Krasnoyarsk,
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
