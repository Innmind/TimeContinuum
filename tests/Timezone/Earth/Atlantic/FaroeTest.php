<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Atlantic;

use Innmind\TimeContinuum\{
    Timezone\Earth\Atlantic\Faroe,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class FaroeTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Faroe;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
