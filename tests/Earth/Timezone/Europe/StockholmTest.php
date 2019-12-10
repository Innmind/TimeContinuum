<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Europe;

use Innmind\TimeContinuum\{
    Earth\Timezone\Europe\Stockholm,
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
