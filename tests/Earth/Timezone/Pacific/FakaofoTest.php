<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Pacific;

use Innmind\TimeContinuum\{
    Earth\Timezone\Pacific\Fakaofo,
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
