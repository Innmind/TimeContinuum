<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Pacific;

use Innmind\TimeContinuum\{
    Timezone\Earth\Pacific\Guadalcanal,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class GuadalcanalTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Guadalcanal;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
