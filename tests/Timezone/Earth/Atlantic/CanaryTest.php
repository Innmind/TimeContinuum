<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Atlantic;

use Innmind\TimeContinuum\{
    Timezone\Earth\Atlantic\Canary,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class CanaryTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Canary;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
