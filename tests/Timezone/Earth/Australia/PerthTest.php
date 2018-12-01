<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Australia;

use Innmind\TimeContinuum\{
    Timezone\Earth\Australia\Perth,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class PerthTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Perth;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
