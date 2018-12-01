<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Europe;

use Innmind\TimeContinuum\{
    Timezone\Earth\Europe\Tallinn,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class TallinnTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Tallinn;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
