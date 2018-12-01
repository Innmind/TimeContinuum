<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Europe;

use Innmind\TimeContinuum\{
    Timezone\Earth\Europe\Podgorica,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class PodgoricaTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Podgorica;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
