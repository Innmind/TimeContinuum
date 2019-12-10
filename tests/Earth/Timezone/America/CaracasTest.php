<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\America;

use Innmind\TimeContinuum\{
    Earth\Timezone\America\Caracas,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class CaracasTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Caracas;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
