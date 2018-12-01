<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Asia;

use Innmind\TimeContinuum\{
    Timezone\Earth\Asia\Riyadh,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class RiyadhTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Riyadh;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
