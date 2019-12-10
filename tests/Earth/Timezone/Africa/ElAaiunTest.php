<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Africa;

use Innmind\TimeContinuum\{
    Earth\Timezone\Africa\ElAaiun,
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
