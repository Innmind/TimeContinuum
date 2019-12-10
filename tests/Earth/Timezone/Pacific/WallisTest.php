<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Pacific;

use Innmind\TimeContinuum\{
    Earth\Timezone\Pacific\Wallis,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class WallisTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Wallis;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
