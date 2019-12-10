<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Europe;

use Innmind\TimeContinuum\{
    Earth\Timezone\Europe\Tirane,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class TiraneTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Tirane;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
