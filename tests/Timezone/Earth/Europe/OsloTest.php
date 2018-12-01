<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Europe;

use Innmind\TimeContinuum\{
    Timezone\Earth\Europe\Oslo,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class OsloTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Oslo;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
