<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\America;

use Innmind\TimeContinuum\{
    Earth\Timezone\America\SaintJohns,
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
