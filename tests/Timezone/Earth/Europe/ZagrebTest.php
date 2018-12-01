<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Europe;

use Innmind\TimeContinuum\{
    Timezone\Earth\Europe\Zagreb,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class ZagrebTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Zagreb;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
