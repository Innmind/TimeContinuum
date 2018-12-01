<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Australia;

use Innmind\TimeContinuum\{
    Timezone\Earth\Australia\Melbourne,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class MelbourneTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Melbourne;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
