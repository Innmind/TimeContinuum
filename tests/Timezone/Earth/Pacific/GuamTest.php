<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Pacific;

use Innmind\TimeContinuum\{
    Timezone\Earth\Pacific\Guam,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class GuamTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Guam;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
