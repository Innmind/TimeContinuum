<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Africa;

use Innmind\TimeContinuum\{
    Timezone\Earth\Africa\Tunis,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class TunisTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Tunis;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
