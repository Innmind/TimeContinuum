<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Asia;

use Innmind\TimeContinuum\{
    Earth\Timezone\Asia\Ashkhabad,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class AshkhabadTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Ashkhabad;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
