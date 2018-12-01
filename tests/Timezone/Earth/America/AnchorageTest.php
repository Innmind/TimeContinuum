<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\America;

use Innmind\TimeContinuum\{
    Timezone\Earth\America\Anchorage,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class AnchorageTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Anchorage;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
