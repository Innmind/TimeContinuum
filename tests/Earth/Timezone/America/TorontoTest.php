<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\America;

use Innmind\TimeContinuum\{
    Earth\Timezone\America\Toronto,
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
