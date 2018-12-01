<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Europe;

use Innmind\TimeContinuum\{
    Timezone\Earth\Europe\Athens,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class AthensTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Athens;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
