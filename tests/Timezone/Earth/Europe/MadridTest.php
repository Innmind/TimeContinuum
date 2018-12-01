<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Europe;

use Innmind\TimeContinuum\{
    Timezone\Earth\Europe\Madrid,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class MadridTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Madrid;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
