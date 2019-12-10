<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Indian;

use Innmind\TimeContinuum\{
    Earth\Timezone\Indian\Antananarivo,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class AntananarivoTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Antananarivo;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
