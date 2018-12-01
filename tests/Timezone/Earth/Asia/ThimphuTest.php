<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Asia;

use Innmind\TimeContinuum\{
    Timezone\Earth\Asia\Thimphu,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class ThimphuTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Thimphu;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
