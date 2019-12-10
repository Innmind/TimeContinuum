<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Europe;

use Innmind\TimeContinuum\{
    Earth\Timezone\Europe\Skopje,
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
