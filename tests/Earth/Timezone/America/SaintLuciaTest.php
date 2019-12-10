<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\America;

use Innmind\TimeContinuum\{
    Earth\Timezone\America\SaintLucia,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class SaintLuciaTest extends TestCase
{
    public function testInterface()
    {
        $zone = new SaintLucia;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
