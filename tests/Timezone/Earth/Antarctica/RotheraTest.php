<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Antarctica;

use Innmind\TimeContinuum\{
    Timezone\Earth\Antarctica\Rothera,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class RotheraTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Rothera;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
