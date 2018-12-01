<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Europe;

use Innmind\TimeContinuum\{
    Timezone\Earth\Europe\Vatican,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class VaticanTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Vatican;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
