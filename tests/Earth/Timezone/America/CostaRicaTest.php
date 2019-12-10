<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\America;

use Innmind\TimeContinuum\{
    Earth\Timezone\America\CostaRica,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class CostaRicaTest extends TestCase
{
    public function testInterface()
    {
        $zone = new CostaRica;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
