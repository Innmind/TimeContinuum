<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Asia;

use Innmind\TimeContinuum\{
    Timezone\Earth\Asia\Amman,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class AmmanTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Amman;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
