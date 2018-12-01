<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\America;

use Innmind\TimeContinuum\{
    Timezone\Earth\America\Aruba,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class ArubaTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Aruba;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
