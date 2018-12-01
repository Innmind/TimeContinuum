<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Asia;

use Innmind\TimeContinuum\{
    Timezone\Earth\Asia\Dhaka,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class DhakaTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Dhaka;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
