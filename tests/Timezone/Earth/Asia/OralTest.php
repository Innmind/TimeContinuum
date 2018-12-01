<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Asia;

use Innmind\TimeContinuum\{
    Timezone\Earth\Asia\Oral,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class OralTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Oral;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
