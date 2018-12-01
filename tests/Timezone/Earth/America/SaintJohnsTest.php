<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\America;

use Innmind\TimeContinuum\{
    Timezone\Earth\America\SaintJohns,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class SaintJohnsTest extends TestCase
{
    public function testInterface()
    {
        $zone = new SaintJohns;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
