<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Asia;

use Innmind\TimeContinuum\{
    Timezone\Earth\Asia\Pontianak,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class PontianakTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Pontianak;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
