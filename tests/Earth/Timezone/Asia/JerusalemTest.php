<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Asia;

use Innmind\TimeContinuum\{
    Earth\Timezone\Asia\Jerusalem,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class JerusalemTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Jerusalem;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
