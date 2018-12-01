<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Europe;

use Innmind\TimeContinuum\{
    Timezone\Earth\Europe\Kaliningrad,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class KaliningradTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Kaliningrad;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
