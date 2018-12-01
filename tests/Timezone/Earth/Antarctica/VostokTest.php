<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Antarctica;

use Innmind\TimeContinuum\{
    Timezone\Earth\Antarctica\Vostok,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class VostokTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Vostok;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
