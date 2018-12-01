<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Pacific;

use Innmind\TimeContinuum\{
    Timezone\Earth\Pacific\Fakaofo,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class FakaofoTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Fakaofo;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
