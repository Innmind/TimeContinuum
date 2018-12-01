<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\America;

use Innmind\TimeContinuum\{
    Timezone\Earth\America\Guatemala,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class GuatemalaTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Guatemala;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
