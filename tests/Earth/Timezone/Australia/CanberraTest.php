<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Australia;

use Innmind\TimeContinuum\{
    Earth\Timezone\Australia\Canberra,
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
