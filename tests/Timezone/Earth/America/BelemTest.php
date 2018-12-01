<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\America;

use Innmind\TimeContinuum\{
    Timezone\Earth\America\Belem,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class BelemTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Belem;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
