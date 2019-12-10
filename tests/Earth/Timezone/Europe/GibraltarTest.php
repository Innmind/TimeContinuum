<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Europe;

use Innmind\TimeContinuum\{
    Earth\Timezone\Europe\Gibraltar,
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
