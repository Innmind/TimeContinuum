<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Europe;

use Innmind\TimeContinuum\{
    Earth\Timezone\Europe\SanMarino,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class SanMarinoTest extends TestCase
{
    public function testInterface()
    {
        $zone = new SanMarino;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
