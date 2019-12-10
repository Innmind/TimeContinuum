<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\America;

use Innmind\TimeContinuum\{
    Earth\Timezone\America\Cancun,
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
