<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Asia;

use Innmind\TimeContinuum\{
    Timezone\Earth\Asia\Almaty,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class AlmatyTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Almaty;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
