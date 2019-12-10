<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\America;

use Innmind\TimeContinuum\{
    Earth\Timezone\America\Bahia,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class BahiaTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Bahia;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
