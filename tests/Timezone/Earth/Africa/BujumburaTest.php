<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Africa;

use Innmind\TimeContinuum\{
    Timezone\Earth\Africa\Bujumbura,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class BujumburaTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Bujumbura;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
