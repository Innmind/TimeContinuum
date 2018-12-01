<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Europe;

use Innmind\TimeContinuum\{
    Timezone\Earth\Europe\Lisbon,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class LisbonTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Lisbon;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
