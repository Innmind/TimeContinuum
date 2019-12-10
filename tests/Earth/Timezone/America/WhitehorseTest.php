<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\America;

use Innmind\TimeContinuum\{
    Earth\Timezone\America\Whitehorse,
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
