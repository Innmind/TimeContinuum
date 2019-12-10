<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Africa;

use Innmind\TimeContinuum\{
    Earth\Timezone\Africa\SaoTome,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class SaoTomeTest extends TestCase
{
    public function testInterface()
    {
        $zone = new SaoTome;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
