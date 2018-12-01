<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\America;

use Innmind\TimeContinuum\{
    Timezone\Earth\America\PortoAcre,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class PortoAcreTest extends TestCase
{
    public function testInterface()
    {
        $zone = new PortoAcre;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
