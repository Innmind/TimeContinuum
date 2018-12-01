<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Australia;

use Innmind\TimeContinuum\{
    Timezone\Earth\Australia\South,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class SouthTest extends TestCase
{
    public function testInterface()
    {
        $zone = new South;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
