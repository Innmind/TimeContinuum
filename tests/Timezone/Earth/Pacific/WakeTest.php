<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Pacific;

use Innmind\TimeContinuum\{
    Timezone\Earth\Pacific\Wake,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class WakeTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Wake;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
