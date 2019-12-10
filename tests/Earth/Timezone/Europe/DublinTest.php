<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Europe;

use Innmind\TimeContinuum\{
    Earth\Timezone\Europe\Dublin,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class DublinTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Dublin;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
