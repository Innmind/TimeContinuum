<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\America;

use Innmind\TimeContinuum\{
    Timezone\Earth\America\Boise,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class BoiseTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Boise;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
