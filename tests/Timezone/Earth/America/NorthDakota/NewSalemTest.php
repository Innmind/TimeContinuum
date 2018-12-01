<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\America\NorthDakota;

use Innmind\TimeContinuum\{
    Timezone\Earth\America\NorthDakota\NewSalem,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class NewSalemTest extends TestCase
{
    public function testInterface()
    {
        $zone = new NewSalem;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
