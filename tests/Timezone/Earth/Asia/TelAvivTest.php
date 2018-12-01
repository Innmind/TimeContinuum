<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Asia;

use Innmind\TimeContinuum\{
    Timezone\Earth\Asia\TelAviv,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class TelAvivTest extends TestCase
{
    public function testInterface()
    {
        $zone = new TelAviv;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
