<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Australia;

use Innmind\TimeContinuum\{
    Earth\Timezone\Australia\Victoria,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class VictoriaTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Victoria;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
