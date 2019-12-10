<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Asia;

use Innmind\TimeContinuum\{
    Earth\Timezone\Asia\Oral,
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
