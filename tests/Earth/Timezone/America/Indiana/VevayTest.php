<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\America\Indiana;

use Innmind\TimeContinuum\{
    Earth\Timezone\America\Indiana\Vevay,
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
