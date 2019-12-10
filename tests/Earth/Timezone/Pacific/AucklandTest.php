<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Pacific;

use Innmind\TimeContinuum\{
    Earth\Timezone\Pacific\Auckland,
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
