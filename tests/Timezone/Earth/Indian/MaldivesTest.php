<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Indian;

use Innmind\TimeContinuum\{
    Timezone\Earth\Indian\Maldives,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class MaldivesTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Maldives;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
