<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Atlantic;

use Innmind\TimeContinuum\{
    Timezone\Earth\Atlantic\Madeira,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class MadeiraTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Madeira;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
