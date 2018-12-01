<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\America;

use Innmind\TimeContinuum\{
    Timezone\Earth\America\Recife,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class RecifeTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Recife;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
