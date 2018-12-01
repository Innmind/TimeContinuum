<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Africa;

use Innmind\TimeContinuum\{
    Timezone\Earth\Africa\Dakar,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class DakarTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Dakar;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
