<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Europe;

use Innmind\TimeContinuum\{
    Earth\Timezone\Europe\Oslo,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class OsloTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Oslo;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
