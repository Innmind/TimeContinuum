<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Africa;

use Innmind\TimeContinuum\{
    Earth\Timezone\Africa\Tripoli,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class TripoliTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Tripoli;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
