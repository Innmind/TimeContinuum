<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\America;

use Innmind\TimeContinuum\{
    Timezone\Earth\America\Sitka,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class SitkaTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Sitka;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
