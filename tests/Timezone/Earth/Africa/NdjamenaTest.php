<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Africa;

use Innmind\TimeContinuum\{
    Timezone\Earth\Africa\Ndjamena,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class NdjamenaTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Ndjamena;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
