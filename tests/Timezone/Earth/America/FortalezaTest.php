<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\America;

use Innmind\TimeContinuum\{
    Timezone\Earth\America\Fortaleza,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class FortalezaTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Fortaleza;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
