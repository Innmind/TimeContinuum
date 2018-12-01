<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Africa;

use Innmind\TimeContinuum\{
    Timezone\Earth\Africa\Kampala,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class KampalaTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Kampala;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
