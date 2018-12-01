<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Europe;

use Innmind\TimeContinuum\{
    Timezone\Earth\Europe\Stockholm,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class StockholmTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Stockholm;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
