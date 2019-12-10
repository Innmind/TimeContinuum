<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Africa;

use Innmind\TimeContinuum\{
    Earth\Timezone\Africa\Asmera,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class AsmeraTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Asmera;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
