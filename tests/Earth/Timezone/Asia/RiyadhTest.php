<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Asia;

use Innmind\TimeContinuum\{
    Earth\Timezone\Asia\Riyadh,
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
