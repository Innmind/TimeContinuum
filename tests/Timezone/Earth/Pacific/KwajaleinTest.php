<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Pacific;

use Innmind\TimeContinuum\{
    Timezone\Earth\Pacific\Kwajalein,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class KwajaleinTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Kwajalein;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
