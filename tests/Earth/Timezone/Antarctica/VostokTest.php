<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Antarctica;

use Innmind\TimeContinuum\{
    Earth\Timezone\Antarctica\Vostok,
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
