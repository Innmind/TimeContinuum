<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Asia;

use Innmind\TimeContinuum\{
    Timezone\Earth\Asia\Ulaanbaatar,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class UlaanbaatarTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Ulaanbaatar;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
