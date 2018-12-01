<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Europe;

use Innmind\TimeContinuum\{
    Timezone\Earth\Europe\Brussels,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class BrusselsTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Brussels;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
