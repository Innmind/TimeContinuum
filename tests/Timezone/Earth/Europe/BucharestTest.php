<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Europe;

use Innmind\TimeContinuum\{
    Timezone\Earth\Europe\Bucharest,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class BucharestTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Bucharest;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
