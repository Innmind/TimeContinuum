<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\America\Argentina;

use Innmind\TimeContinuum\{
    Earth\Timezone\America\Argentina\Ushuaia,
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
