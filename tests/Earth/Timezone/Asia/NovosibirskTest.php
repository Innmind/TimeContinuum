<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Asia;

use Innmind\TimeContinuum\{
    Earth\Timezone\Asia\Novosibirsk,
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
