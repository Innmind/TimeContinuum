<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Europe;

use Innmind\TimeContinuum\{
    Earth\Timezone\Europe\Lisbon,
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
