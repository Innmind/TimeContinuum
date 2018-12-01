<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\America;

use Innmind\TimeContinuum\{
    Timezone\Earth\America\LowerPrinces,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class LowerPrincesTest extends TestCase
{
    public function testInterface()
    {
        $zone = new LowerPrinces;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
