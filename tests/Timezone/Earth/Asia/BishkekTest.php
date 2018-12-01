<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Asia;

use Innmind\TimeContinuum\{
    Timezone\Earth\Asia\Bishkek,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class BishkekTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Bishkek;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
