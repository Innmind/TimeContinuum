<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\America\Indiana;

use Innmind\TimeContinuum\{
    Timezone\Earth\America\Indiana\Knox,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class KnoxTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Knox;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
