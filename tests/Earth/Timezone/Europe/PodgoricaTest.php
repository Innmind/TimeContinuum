<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Europe;

use Innmind\TimeContinuum\{
    Earth\Timezone\Europe\Podgorica,
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
