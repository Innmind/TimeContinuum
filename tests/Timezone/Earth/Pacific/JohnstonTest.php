<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Pacific;

use Innmind\TimeContinuum\{
    Timezone\Earth\Pacific\Johnston,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class JohnstonTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Johnston;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
