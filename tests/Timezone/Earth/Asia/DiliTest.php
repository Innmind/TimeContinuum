<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Asia;

use Innmind\TimeContinuum\{
    Timezone\Earth\Asia\Dili,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class DiliTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Dili;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
