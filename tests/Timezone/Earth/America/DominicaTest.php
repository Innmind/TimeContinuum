<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\America;

use Innmind\TimeContinuum\{
    Timezone\Earth\America\Dominica,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class DominicaTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Dominica;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
