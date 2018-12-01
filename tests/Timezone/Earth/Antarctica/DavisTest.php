<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Antarctica;

use Innmind\TimeContinuum\{
    Timezone\Earth\Antarctica\Davis,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class DavisTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Davis;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
