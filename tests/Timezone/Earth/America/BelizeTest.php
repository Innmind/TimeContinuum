<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\America;

use Innmind\TimeContinuum\{
    Timezone\Earth\America\Belize,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class BelizeTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Belize;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
