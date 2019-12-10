<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\America\Indiana;

use Innmind\TimeContinuum\{
    Earth\Timezone\America\Indiana\Vincennes,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class VincennesTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Vincennes;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
