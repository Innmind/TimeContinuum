<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Europe;

use Innmind\TimeContinuum\{
    Timezone\Earth\Europe\Berlin,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class BerlinTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Berlin;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
