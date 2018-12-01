<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Atlantic;

use Innmind\TimeContinuum\{
    Timezone\Earth\Atlantic\Faeroe,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class FaeroeTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Faeroe;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
