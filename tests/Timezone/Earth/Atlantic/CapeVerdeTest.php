<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Atlantic;

use Innmind\TimeContinuum\{
    Timezone\Earth\Atlantic\CapeVerde,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class CapeVerdeTest extends TestCase
{
    public function testInterface()
    {
        $zone = new CapeVerde;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
