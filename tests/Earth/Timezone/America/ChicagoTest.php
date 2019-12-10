<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\America;

use Innmind\TimeContinuum\{
    Earth\Timezone\America\Chicago,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class ChicagoTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Chicago;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
