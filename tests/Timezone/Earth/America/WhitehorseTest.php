<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\America;

use Innmind\TimeContinuum\{
    Timezone\Earth\America\Whitehorse,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class WhitehorseTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Whitehorse;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
