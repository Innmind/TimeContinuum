<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Australia;

use Innmind\TimeContinuum\{
    Timezone\Earth\Australia\Hobart,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class HobartTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Hobart;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
