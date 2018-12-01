<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\America;

use Innmind\TimeContinuum\{
    Timezone\Earth\America\Godthab,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class GodthabTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Godthab;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
