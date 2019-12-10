<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Antarctica;

use Innmind\TimeContinuum\{
    Earth\Timezone\Antarctica\Davis,
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
