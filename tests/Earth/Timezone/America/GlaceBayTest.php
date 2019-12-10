<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\America;

use Innmind\TimeContinuum\{
    Earth\Timezone\America\GlaceBay,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class GlaceBayTest extends TestCase
{
    public function testInterface()
    {
        $zone = new GlaceBay;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
