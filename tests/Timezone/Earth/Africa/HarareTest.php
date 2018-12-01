<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Africa;

use Innmind\TimeContinuum\{
    Timezone\Earth\Africa\Harare,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class HarareTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Harare;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
