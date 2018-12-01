<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Europe;

use Innmind\TimeContinuum\{
    Timezone\Earth\Europe\Kiev,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class KievTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Kiev;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
