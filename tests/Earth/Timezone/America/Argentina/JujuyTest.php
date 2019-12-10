<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\America\Argentina;

use Innmind\TimeContinuum\{
    Earth\Timezone\America\Argentina\Jujuy,
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
