<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Europe;

use Innmind\TimeContinuum\{
    Timezone\Earth\Europe\Moscow,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class MoscowTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Moscow;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
