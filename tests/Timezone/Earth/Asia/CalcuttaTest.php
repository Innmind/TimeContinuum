<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Asia;

use Innmind\TimeContinuum\{
    Timezone\Earth\Asia\Calcutta,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class CalcuttaTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Calcutta;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
