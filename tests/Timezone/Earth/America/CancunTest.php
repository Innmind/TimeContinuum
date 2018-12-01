<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\America;

use Innmind\TimeContinuum\{
    Timezone\Earth\America\Cancun,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class CancunTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Cancun;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
