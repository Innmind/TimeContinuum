<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\America\Argentina;

use Innmind\TimeContinuum\{
    Earth\Timezone\America\Argentina\LaRioja,
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
