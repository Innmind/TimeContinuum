<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\America;

use Innmind\TimeContinuum\{
    Timezone\Earth\America\Maceio,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class MaceioTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Maceio;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
