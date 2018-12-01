<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Europe;

use Innmind\TimeContinuum\{
    Timezone\Earth\Europe\Warsaw,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class WarsawTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Warsaw;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
