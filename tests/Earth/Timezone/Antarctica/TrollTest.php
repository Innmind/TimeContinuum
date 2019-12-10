<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Antarctica;

use Innmind\TimeContinuum\{
    Earth\Timezone\Antarctica\Troll,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class TrollTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Troll;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
