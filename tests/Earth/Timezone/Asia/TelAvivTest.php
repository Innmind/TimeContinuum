<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Asia;

use Innmind\TimeContinuum\{
    Earth\Timezone\Asia\TelAviv,
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
