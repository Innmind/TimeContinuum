<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\America;

use Innmind\TimeContinuum\{
    Earth\Timezone\America\Montserrat,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class MontserratTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Montserrat;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
