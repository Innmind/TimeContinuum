<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\America;

use Innmind\TimeContinuum\{
    Timezone\Earth\America\Chihuahua,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class ChihuahuaTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Chihuahua;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
