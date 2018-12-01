<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\America\Argentina;

use Innmind\TimeContinuum\{
    Timezone\Earth\America\Argentina\LaRioja,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class LaRiojaTest extends TestCase
{
    public function testInterface()
    {
        $zone = new LaRioja;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
