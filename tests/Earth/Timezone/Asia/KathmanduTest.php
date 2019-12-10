<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Asia;

use Innmind\TimeContinuum\{
    Earth\Timezone\Asia\Kathmandu,
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
