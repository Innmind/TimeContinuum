<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Pacific;

use Innmind\TimeContinuum\{
    Timezone\Earth\Pacific\Saipan,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class SaipanTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Saipan;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
