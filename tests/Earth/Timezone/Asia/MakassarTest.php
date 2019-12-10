<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Asia;

use Innmind\TimeContinuum\{
    Earth\Timezone\Asia\Makassar,
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
