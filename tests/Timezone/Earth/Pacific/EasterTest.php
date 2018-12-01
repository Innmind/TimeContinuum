<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Pacific;

use Innmind\TimeContinuum\{
    Timezone\Earth\Pacific\Easter,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class EasterTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Easter;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
