<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Europe;

use Innmind\TimeContinuum\{
    Timezone\Earth\Europe\Skopje,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class SkopjeTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Skopje;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
