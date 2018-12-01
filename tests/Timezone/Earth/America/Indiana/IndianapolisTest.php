<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\America\Indiana;

use Innmind\TimeContinuum\{
    Timezone\Earth\America\Indiana\Indianapolis,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class IndianapolisTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Indianapolis;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
