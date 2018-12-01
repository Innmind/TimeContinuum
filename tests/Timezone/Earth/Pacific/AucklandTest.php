<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Pacific;

use Innmind\TimeContinuum\{
    Timezone\Earth\Pacific\Auckland,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class AucklandTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Auckland;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
