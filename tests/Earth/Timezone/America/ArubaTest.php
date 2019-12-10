<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\America;

use Innmind\TimeContinuum\{
    Earth\Timezone\America\Aruba,
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
