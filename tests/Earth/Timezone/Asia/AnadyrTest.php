<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Asia;

use Innmind\TimeContinuum\{
    Earth\Timezone\Asia\Anadyr,
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
