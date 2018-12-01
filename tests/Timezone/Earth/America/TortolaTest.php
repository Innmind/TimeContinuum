<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\America;

use Innmind\TimeContinuum\{
    Timezone\Earth\America\Tortola,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class TortolaTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Tortola;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
