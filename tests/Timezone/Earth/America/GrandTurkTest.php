<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\America;

use Innmind\TimeContinuum\{
    Timezone\Earth\America\GrandTurk,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class GrandTurkTest extends TestCase
{
    public function testInterface()
    {
        $zone = new GrandTurk;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
