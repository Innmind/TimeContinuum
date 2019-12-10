<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Asia;

use Innmind\TimeContinuum\{
    Earth\Timezone\Asia\Srednekolymsk,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class SrednekolymskTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Srednekolymsk;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
