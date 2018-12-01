<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Antarctica;

use Innmind\TimeContinuum\{
    Timezone\Earth\Antarctica\SouthPole,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class SouthPoleTest extends TestCase
{
    public function testInterface()
    {
        $zone = new SouthPole;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
