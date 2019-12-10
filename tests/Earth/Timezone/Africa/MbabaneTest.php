<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Africa;

use Innmind\TimeContinuum\{
    Earth\Timezone\Africa\Mbabane,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class MbabaneTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Mbabane;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
