<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Africa;

use Innmind\TimeContinuum\{
    Timezone\Earth\Africa\Lubumbashi,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class LubumbashiTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Lubumbashi;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
