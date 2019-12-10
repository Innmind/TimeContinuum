<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Europe;

use Innmind\TimeContinuum\{
    Earth\Timezone\Europe\Malta,
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
