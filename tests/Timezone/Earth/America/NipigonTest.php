<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\America;

use Innmind\TimeContinuum\{
    Timezone\Earth\America\Nipigon,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class NipigonTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Nipigon;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
