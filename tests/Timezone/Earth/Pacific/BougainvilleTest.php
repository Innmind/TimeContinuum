<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Pacific;

use Innmind\TimeContinuum\{
    Timezone\Earth\Pacific\Bougainville,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class BougainvilleTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Bougainville;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
