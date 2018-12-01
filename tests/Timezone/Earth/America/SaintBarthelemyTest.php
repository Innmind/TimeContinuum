<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\America;

use Innmind\TimeContinuum\{
    Timezone\Earth\America\SaintBarthelemy,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class SaintBarthelemyTest extends TestCase
{
    public function testInterface()
    {
        $zone = new SaintBarthelemy;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
