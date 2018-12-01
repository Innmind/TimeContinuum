<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Asia;

use Innmind\TimeContinuum\{
    Timezone\Earth\Asia\Kathmandu,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class KathmanduTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Kathmandu;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
