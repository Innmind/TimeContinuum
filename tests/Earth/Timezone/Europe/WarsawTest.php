<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Europe;

use Innmind\TimeContinuum\{
    Earth\Timezone\Europe\Warsaw,
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
