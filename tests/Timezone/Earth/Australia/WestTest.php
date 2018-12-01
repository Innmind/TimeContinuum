<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Australia;

use Innmind\TimeContinuum\{
    Timezone\Earth\Australia\West,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class WestTest extends TestCase
{
    public function testInterface()
    {
        $zone = new West;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
