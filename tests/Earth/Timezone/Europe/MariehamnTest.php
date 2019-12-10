<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Europe;

use Innmind\TimeContinuum\{
    Earth\Timezone\Europe\Mariehamn,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class MariehamnTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Mariehamn;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
