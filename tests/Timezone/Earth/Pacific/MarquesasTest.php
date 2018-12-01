<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Pacific;

use Innmind\TimeContinuum\{
    Timezone\Earth\Pacific\Marquesas,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class MarquesasTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Marquesas;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
