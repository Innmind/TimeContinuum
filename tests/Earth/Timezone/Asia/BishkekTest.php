<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Asia;

use Innmind\TimeContinuum\{
    Earth\Timezone\Asia\Bishkek,
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
