<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\America;

use Innmind\TimeContinuum\{
    Timezone\Earth\America\Rosario,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class RosarioTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Rosario;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
