<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\America;

use Innmind\TimeContinuum\{
    Timezone\Earth\America\Phoenix,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class PhoenixTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Phoenix;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
