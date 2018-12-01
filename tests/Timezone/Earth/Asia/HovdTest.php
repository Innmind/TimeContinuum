<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Asia;

use Innmind\TimeContinuum\{
    Timezone\Earth\Asia\Hovd,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class HovdTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Hovd;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
