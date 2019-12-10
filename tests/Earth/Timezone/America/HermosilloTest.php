<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\America;

use Innmind\TimeContinuum\{
    Earth\Timezone\America\Hermosillo,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class HermosilloTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Hermosillo;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
