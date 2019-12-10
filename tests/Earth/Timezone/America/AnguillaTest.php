<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\America;

use Innmind\TimeContinuum\{
    Earth\Timezone\America\Anguilla,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class AnguillaTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Anguilla;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
