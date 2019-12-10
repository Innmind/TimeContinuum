<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Europe;

use Innmind\TimeContinuum\{
    Earth\Timezone\Europe\Oslo,
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
