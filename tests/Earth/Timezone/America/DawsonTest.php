<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\America;

use Innmind\TimeContinuum\{
    Earth\Timezone\America\Dawson,
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
