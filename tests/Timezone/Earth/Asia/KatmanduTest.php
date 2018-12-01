<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Asia;

use Innmind\TimeContinuum\{
    Timezone\Earth\Asia\Katmandu,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class KatmanduTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Katmandu;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
