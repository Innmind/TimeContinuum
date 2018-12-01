<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Asia;

use Innmind\TimeContinuum\{
    Timezone\Earth\Asia\Kolkata,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class KolkataTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Kolkata;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
