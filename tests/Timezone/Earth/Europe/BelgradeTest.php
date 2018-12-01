<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Europe;

use Innmind\TimeContinuum\{
    Timezone\Earth\Europe\Belgrade,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class BelgradeTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Belgrade;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
