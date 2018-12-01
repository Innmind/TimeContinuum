<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Antarctica;

use Innmind\TimeContinuum\{
    Timezone\Earth\Antarctica\Syowa,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class SyowaTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Syowa;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
