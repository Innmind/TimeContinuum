<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\America\Argentina;

use Innmind\TimeContinuum\{
    Timezone\Earth\America\Argentina\Mendoza,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class MendozaTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Mendoza;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
