<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Europe;

use Innmind\TimeContinuum\{
    Timezone\Earth\Europe\London,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class LondonTest extends TestCase
{
    public function testInterface()
    {
        $zone = new London;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
