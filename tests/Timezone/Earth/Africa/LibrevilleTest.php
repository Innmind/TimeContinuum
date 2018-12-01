<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Africa;

use Innmind\TimeContinuum\{
    Timezone\Earth\Africa\Libreville,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class LibrevilleTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Libreville;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
