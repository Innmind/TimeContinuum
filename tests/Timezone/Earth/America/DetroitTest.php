<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\America;

use Innmind\TimeContinuum\{
    Timezone\Earth\America\Detroit,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class DetroitTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Detroit;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
