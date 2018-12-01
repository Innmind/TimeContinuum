<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Asia;

use Innmind\TimeContinuum\{
    Timezone\Earth\Asia\Istanbul,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class IstanbulTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Istanbul;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
