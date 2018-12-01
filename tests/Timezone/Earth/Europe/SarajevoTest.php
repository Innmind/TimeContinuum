<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Europe;

use Innmind\TimeContinuum\{
    Timezone\Earth\Europe\Sarajevo,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class SarajevoTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Sarajevo;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
