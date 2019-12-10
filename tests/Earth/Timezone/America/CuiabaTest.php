<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\America;

use Innmind\TimeContinuum\{
    Earth\Timezone\America\Cuiaba,
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
