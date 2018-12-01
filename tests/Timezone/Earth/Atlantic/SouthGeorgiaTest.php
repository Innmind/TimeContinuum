<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Atlantic;

use Innmind\TimeContinuum\{
    Timezone\Earth\Atlantic\SouthGeorgia,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class SouthGeorgiaTest extends TestCase
{
    public function testInterface()
    {
        $zone = new SouthGeorgia;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
