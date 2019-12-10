<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\America;

use Innmind\TimeContinuum\{
    Earth\Timezone\America\Tegucigalpa,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class TegucigalpaTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Tegucigalpa;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
