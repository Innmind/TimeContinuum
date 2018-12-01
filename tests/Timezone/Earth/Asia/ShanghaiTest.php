<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Asia;

use Innmind\TimeContinuum\{
    Timezone\Earth\Asia\Shanghai,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class ShanghaiTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Shanghai;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
