<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Asia;

use Innmind\TimeContinuum\{
    Earth\Timezone\Asia\Tokyo,
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
