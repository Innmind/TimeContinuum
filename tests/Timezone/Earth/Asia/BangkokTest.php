<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Asia;

use Innmind\TimeContinuum\{
    Timezone\Earth\Asia\Bangkok,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class BangkokTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Bangkok;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
