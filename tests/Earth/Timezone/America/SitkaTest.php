<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\America;

use Innmind\TimeContinuum\{
    Earth\Timezone\America\Sitka,
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
