<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Asia;

use Innmind\TimeContinuum\{
    Timezone\Earth\Asia\Khandyga,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class KhandygaTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Khandyga;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
