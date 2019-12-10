<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Asia;

use Innmind\TimeContinuum\{
    Earth\Timezone\Asia\Jayapura,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class JayapuraTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Jayapura;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
