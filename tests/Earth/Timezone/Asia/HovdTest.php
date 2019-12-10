<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Asia;

use Innmind\TimeContinuum\{
    Earth\Timezone\Asia\Hovd,
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
