<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Europe;

use Innmind\TimeContinuum\{
    Timezone\Earth\Europe\Bratislava,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class BratislavaTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Bratislava;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
