<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Asia;

use Innmind\TimeContinuum\{
    Earth\Timezone\Asia\Calcutta,
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
