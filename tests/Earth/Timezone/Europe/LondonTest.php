<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Europe;

use Innmind\TimeContinuum\{
    Earth\Timezone\Europe\London,
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
