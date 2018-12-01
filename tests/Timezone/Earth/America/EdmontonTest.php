<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\America;

use Innmind\TimeContinuum\{
    Timezone\Earth\America\Edmonton,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class EdmontonTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Edmonton;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
