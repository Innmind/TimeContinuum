<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\America\Argentina;

use Innmind\TimeContinuum\{
    Timezone\Earth\America\Argentina\Ushuaia,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class UshuaiaTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Ushuaia;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
