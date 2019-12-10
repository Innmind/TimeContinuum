<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Australia;

use Innmind\TimeContinuum\{
    Earth\Timezone\Australia\West,
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
