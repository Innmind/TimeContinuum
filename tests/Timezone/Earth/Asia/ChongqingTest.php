<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Asia;

use Innmind\TimeContinuum\{
    Timezone\Earth\Asia\Chongqing,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class ChongqingTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Chongqing;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
