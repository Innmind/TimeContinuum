<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\America\Argentina;

use Innmind\TimeContinuum\{
    Timezone\Earth\America\Argentina\Jujuy,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class JujuyTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Jujuy;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
