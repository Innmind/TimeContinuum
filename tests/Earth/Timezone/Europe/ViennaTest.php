<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Europe;

use Innmind\TimeContinuum\{
    Earth\Timezone\Europe\Vienna,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class ViennaTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Vienna;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
