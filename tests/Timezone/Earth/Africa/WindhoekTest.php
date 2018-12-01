<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Africa;

use Innmind\TimeContinuum\{
    Timezone\Earth\Africa\Windhoek,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class WindhoekTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Windhoek;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
