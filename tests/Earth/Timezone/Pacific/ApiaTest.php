<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Pacific;

use Innmind\TimeContinuum\{
    Earth\Timezone\Pacific\Apia,
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
