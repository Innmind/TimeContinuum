<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\America;

use Innmind\TimeContinuum\{
    Timezone\Earth\America\Toronto,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class TorontoTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Toronto;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
