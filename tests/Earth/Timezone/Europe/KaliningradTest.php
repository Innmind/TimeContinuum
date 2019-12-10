<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Europe;

use Innmind\TimeContinuum\{
    Earth\Timezone\Europe\Kaliningrad,
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
