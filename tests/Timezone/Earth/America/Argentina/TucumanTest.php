<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\America\Argentina;

use Innmind\TimeContinuum\{
    Timezone\Earth\America\Argentina\Tucuman,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class TucumanTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Tucuman;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
