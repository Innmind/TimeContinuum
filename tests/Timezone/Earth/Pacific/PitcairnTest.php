<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Pacific;

use Innmind\TimeContinuum\{
    Timezone\Earth\Pacific\Pitcairn,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class PitcairnTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Pitcairn;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
