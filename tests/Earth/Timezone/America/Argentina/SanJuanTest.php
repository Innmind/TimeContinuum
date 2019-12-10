<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\America\Argentina;

use Innmind\TimeContinuum\{
    Earth\Timezone\America\Argentina\SanJuan,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class SanJuanTest extends TestCase
{
    public function testInterface()
    {
        $zone = new SanJuan;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
