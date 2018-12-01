<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Europe;

use Innmind\TimeContinuum\{
    Timezone\Earth\Europe\Malta,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class MaltaTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Malta;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
