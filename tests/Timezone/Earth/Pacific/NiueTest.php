<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Pacific;

use Innmind\TimeContinuum\{
    Timezone\Earth\Pacific\Niue,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class NiueTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Niue;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
