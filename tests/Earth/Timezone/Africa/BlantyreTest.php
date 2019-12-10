<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Africa;

use Innmind\TimeContinuum\{
    Earth\Timezone\Africa\Blantyre,
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
