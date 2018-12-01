<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Asia;

use Innmind\TimeContinuum\{
    Timezone\Earth\Asia\Taipei,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class TaipeiTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Taipei;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
