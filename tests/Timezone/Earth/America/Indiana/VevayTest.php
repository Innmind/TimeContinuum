<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\America\Indiana;

use Innmind\TimeContinuum\{
    Timezone\Earth\America\Indiana\Vevay,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class VevayTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Vevay;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
