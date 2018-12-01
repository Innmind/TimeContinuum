<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Pacific;

use Innmind\TimeContinuum\{
    Timezone\Earth\Pacific\Chatham,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class ChathamTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Chatham;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
