<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\America;

use Innmind\TimeContinuum\{
    Earth\Timezone\America\Monticello,
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
