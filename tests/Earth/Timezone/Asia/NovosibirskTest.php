<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Asia;

use Innmind\TimeContinuum\{
    Earth\Timezone\Asia\Novosibirsk,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class NovosibirskTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Novosibirsk;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
