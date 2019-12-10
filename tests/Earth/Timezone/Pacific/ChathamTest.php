<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Pacific;

use Innmind\TimeContinuum\{
    Earth\Timezone\Pacific\Chatham,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class ChathamTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Chatham;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
