<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Asia;

use Innmind\TimeContinuum\{
    Timezone\Earth\Asia\Tokyo,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class TokyoTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Tokyo;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
