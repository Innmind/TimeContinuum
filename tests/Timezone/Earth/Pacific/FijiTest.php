<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Pacific;

use Innmind\TimeContinuum\{
    Timezone\Earth\Pacific\Fiji,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class FijiTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Fiji;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
