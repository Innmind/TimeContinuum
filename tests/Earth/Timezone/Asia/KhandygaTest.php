<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Asia;

use Innmind\TimeContinuum\{
    Earth\Timezone\Asia\Khandyga,
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
