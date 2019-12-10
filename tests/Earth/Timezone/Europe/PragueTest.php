<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Europe;

use Innmind\TimeContinuum\{
    Earth\Timezone\Europe\Prague,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class PragueTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Prague;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
