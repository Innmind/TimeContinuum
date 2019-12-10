<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Asia;

use Innmind\TimeContinuum\{
    Earth\Timezone\Asia\Beirut,
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
