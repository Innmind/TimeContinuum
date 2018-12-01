<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Africa;

use Innmind\TimeContinuum\{
    Timezone\Earth\Africa\PortoNovo,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class PortoNovoTest extends TestCase
{
    public function testInterface()
    {
        $zone = new PortoNovo;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
