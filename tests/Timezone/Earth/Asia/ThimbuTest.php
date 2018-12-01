<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Asia;

use Innmind\TimeContinuum\{
    Timezone\Earth\Asia\Thimbu,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class ThimbuTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Thimbu;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
