<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Asia;

use Innmind\TimeContinuum\{
    Timezone\Earth\Asia\Beirut,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class BeirutTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Beirut;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
