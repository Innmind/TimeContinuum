<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Pacific;

use Innmind\TimeContinuum\{
    Timezone\Earth\Pacific\Apia,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class ApiaTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Apia;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
