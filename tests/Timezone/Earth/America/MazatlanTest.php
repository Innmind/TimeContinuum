<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\America;

use Innmind\TimeContinuum\{
    Timezone\Earth\America\Mazatlan,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class MazatlanTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Mazatlan;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
