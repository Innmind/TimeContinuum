<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\America;

use Innmind\TimeContinuum\{
    Timezone\Earth\America\Miquelon,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class MiquelonTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Miquelon;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
