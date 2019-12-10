<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Africa;

use Innmind\TimeContinuum\{
    Earth\Timezone\Africa\Nairobi,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class NairobiTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Nairobi;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
