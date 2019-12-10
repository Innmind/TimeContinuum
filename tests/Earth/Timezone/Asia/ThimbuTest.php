<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Asia;

use Innmind\TimeContinuum\{
    Earth\Timezone\Asia\Thimbu,
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
