<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\America;

use Innmind\TimeContinuum\{
    Timezone\Earth\America\Cuiaba,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class CuiabaTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Cuiaba;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
