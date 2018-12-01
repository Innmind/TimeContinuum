<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Pacific;

use Innmind\TimeContinuum\{
    Timezone\Earth\Pacific\Enderbury,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class EnderburyTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Enderbury;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
