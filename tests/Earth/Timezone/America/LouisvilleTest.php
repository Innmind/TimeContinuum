<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\America;

use Innmind\TimeContinuum\{
    Earth\Timezone\America\Louisville,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class LouisvilleTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Louisville;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
