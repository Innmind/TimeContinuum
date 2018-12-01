<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Africa;

use Innmind\TimeContinuum\{
    Timezone\Earth\Africa\Lome,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class LomeTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Lome;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
