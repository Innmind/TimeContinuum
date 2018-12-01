<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Asia;

use Innmind\TimeContinuum\{
    Timezone\Earth\Asia\Macau,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class MacauTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Macau;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
