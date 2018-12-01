<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Europe;

use Innmind\TimeContinuum\{
    Timezone\Earth\Europe\Gibraltar,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class GibraltarTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Gibraltar;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
