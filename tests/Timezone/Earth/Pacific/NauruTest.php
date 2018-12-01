<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Pacific;

use Innmind\TimeContinuum\{
    Timezone\Earth\Pacific\Nauru,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class NauruTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Nauru;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
