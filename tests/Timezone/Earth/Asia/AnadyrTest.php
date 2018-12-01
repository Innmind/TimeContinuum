<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Asia;

use Innmind\TimeContinuum\{
    Timezone\Earth\Asia\Anadyr,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class AnadyrTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Anadyr;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
