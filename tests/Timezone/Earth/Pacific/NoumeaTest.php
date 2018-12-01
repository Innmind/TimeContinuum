<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Pacific;

use Innmind\TimeContinuum\{
    Timezone\Earth\Pacific\Noumea,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class NoumeaTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Noumea;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
