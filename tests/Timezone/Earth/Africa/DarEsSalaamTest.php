<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Africa;

use Innmind\TimeContinuum\{
    Timezone\Earth\Africa\DarEsSalaam,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class DarEsSalaamTest extends TestCase
{
    public function testInterface()
    {
        $zone = new DarEsSalaam;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
