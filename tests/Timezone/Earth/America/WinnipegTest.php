<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\America;

use Innmind\TimeContinuum\{
    Timezone\Earth\America\Winnipeg,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class WinnipegTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Winnipeg;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
