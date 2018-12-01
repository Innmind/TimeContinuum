<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Pacific;

use Innmind\TimeContinuum\{
    Timezone\Earth\Pacific\Palau,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class PalauTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Palau;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
