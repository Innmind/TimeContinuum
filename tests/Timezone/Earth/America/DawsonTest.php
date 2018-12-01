<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\America;

use Innmind\TimeContinuum\{
    Timezone\Earth\America\Dawson,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class DawsonTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Dawson;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
