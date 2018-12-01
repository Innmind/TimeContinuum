<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Asia;

use Innmind\TimeContinuum\{
    Timezone\Earth\Asia\Baku,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class BakuTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Baku;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
