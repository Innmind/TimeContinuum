<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Indian;

use Innmind\TimeContinuum\{
    Timezone\Earth\Indian\Comoro,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class ComoroTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Comoro;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
