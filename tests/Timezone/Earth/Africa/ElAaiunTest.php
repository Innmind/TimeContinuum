<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Africa;

use Innmind\TimeContinuum\{
    Timezone\Earth\Africa\ElAaiun,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class ElAaiunTest extends TestCase
{
    public function testInterface()
    {
        $zone = new ElAaiun;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
