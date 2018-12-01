<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\America;

use Innmind\TimeContinuum\{
    Timezone\Earth\America\Bogota,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class BogotaTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Bogota;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
