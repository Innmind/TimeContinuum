<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\America;

use Innmind\TimeContinuum\{
    Timezone\Earth\America\GooseBay,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class GooseBayTest extends TestCase
{
    public function testInterface()
    {
        $zone = new GooseBay;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
