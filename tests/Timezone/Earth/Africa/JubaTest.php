<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Africa;

use Innmind\TimeContinuum\{
    Timezone\Earth\Africa\Juba,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class JubaTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Juba;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
