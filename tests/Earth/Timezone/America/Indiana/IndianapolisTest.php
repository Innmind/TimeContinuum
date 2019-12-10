<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\America\Indiana;

use Innmind\TimeContinuum\{
    Earth\Timezone\America\Indiana\Indianapolis,
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
