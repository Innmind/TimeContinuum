<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Pacific;

use Innmind\TimeContinuum\{
    Timezone\Earth\Pacific\Majuro,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class MajuroTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Majuro;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
