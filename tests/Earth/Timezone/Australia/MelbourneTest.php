<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Australia;

use Innmind\TimeContinuum\{
    Earth\Timezone\Australia\Melbourne,
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
