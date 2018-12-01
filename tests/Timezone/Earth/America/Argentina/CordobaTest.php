<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\America\Argentina;

use Innmind\TimeContinuum\{
    Timezone\Earth\America\Argentina\Cordoba,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class CordobaTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Cordoba;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
