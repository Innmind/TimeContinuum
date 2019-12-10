<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Pacific;

use Innmind\TimeContinuum\{
    Earth\Timezone\Pacific\Funafuti,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class FunafutiTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Funafuti;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
