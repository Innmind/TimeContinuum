<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\America;

use Innmind\TimeContinuum\{
    Timezone\Earth\America\Montreal,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class MontrealTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Montreal;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
