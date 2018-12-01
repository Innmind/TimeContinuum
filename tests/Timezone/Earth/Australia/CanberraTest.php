<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Australia;

use Innmind\TimeContinuum\{
    Timezone\Earth\Australia\Canberra,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class CanberraTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Canberra;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
