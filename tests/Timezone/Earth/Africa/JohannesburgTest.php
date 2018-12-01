<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Africa;

use Innmind\TimeContinuum\{
    Timezone\Earth\Africa\Johannesburg,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class JohannesburgTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Johannesburg;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
