<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Africa;

use Innmind\TimeContinuum\{
    Earth\Timezone\Africa\Lome,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class LomeTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Lome;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
