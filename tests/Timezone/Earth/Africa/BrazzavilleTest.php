<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Africa;

use Innmind\TimeContinuum\{
    Timezone\Earth\Africa\Brazzaville,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class BrazzavilleTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Brazzaville;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
