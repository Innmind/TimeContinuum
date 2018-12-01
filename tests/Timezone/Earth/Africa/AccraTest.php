<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Africa;

use Innmind\TimeContinuum\{
    Timezone\Earth\Africa\Accra,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class AccraTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Accra;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
