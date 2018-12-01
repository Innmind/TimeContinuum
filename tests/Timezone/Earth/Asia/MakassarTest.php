<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Asia;

use Innmind\TimeContinuum\{
    Timezone\Earth\Asia\Makassar,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class MakassarTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Makassar;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
