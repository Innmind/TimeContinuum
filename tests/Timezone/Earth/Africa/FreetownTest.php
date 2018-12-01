<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Africa;

use Innmind\TimeContinuum\{
    Timezone\Earth\Africa\Freetown,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class FreetownTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Freetown;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
