<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Indian;

use Innmind\TimeContinuum\{
    Earth\Timezone\Indian\Maldives,
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
