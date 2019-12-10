<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Europe;

use Innmind\TimeContinuum\{
    Earth\Timezone\Europe\Belgrade,
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
