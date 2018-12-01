<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Africa;

use Innmind\TimeContinuum\{
    Timezone\Earth\Africa\Lusaka,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class LusakaTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Lusaka;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
