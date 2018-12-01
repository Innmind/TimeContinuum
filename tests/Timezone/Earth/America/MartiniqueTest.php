<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\America;

use Innmind\TimeContinuum\{
    Timezone\Earth\America\Martinique,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class MartiniqueTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Martinique;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
