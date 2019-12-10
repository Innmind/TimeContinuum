<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Africa;

use Innmind\TimeContinuum\{
    Earth\Timezone\Africa\Lubumbashi,
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
