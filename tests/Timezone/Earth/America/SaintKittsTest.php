<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\America;

use Innmind\TimeContinuum\{
    Timezone\Earth\America\SaintKitts,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class SaintKittsTest extends TestCase
{
    public function testInterface()
    {
        $zone = new SaintKitts;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
