<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Africa;

use Innmind\TimeContinuum\{
    Timezone\Earth\Africa\Blantyre,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class BlantyreTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Blantyre;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
