<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\America;

use Innmind\TimeContinuum\{
    Timezone\Earth\America\SaintThomas,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class SaintThomasTest extends TestCase
{
    public function testInterface()
    {
        $zone = new SaintThomas;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
