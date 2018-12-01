<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Asia;

use Innmind\TimeContinuum\{
    Timezone\Earth\Asia\Novosibirsk,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class NovosibirskTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Novosibirsk;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
