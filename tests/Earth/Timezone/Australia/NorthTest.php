<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Australia;

use Innmind\TimeContinuum\{
    Earth\Timezone\Australia\North,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class NorthTest extends TestCase
{
    public function testInterface()
    {
        $zone = new North;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
