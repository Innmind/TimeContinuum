<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Europe;

use Innmind\TimeContinuum\{
    Timezone\Earth\Europe\Jersey,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class JerseyTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Jersey;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
