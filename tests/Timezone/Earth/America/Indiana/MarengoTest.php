<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\America\Indiana;

use Innmind\TimeContinuum\{
    Timezone\Earth\America\Indiana\Marengo,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class MarengoTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Marengo;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
