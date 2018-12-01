<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\America;

use Innmind\TimeContinuum\{
    Timezone\Earth\America\Monticello,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class MonticelloTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Monticello;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
