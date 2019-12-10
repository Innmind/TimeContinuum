<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Africa;

use Innmind\TimeContinuum\{
    Earth\Timezone\Africa\Cairo,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class CairoTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Cairo;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
