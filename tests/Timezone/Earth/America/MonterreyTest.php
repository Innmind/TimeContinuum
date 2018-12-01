<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\America;

use Innmind\TimeContinuum\{
    Timezone\Earth\America\Monterrey,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class MonterreyTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Monterrey;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
