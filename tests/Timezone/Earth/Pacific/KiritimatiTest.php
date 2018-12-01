<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Pacific;

use Innmind\TimeContinuum\{
    Timezone\Earth\Pacific\Kiritimati,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class KiritimatiTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Kiritimati;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
