<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\America;

use Innmind\TimeContinuum\{
    Timezone\Earth\America\Atikokan,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class AtikokanTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Atikokan;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
