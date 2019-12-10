<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\America;

use Innmind\TimeContinuum\{
    Earth\Timezone\America\SaintBarthelemy,
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
