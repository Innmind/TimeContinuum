<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\America;

use Innmind\TimeContinuum\{
    Timezone\Earth\America\SaintVincent,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class SaintVincentTest extends TestCase
{
    public function testInterface()
    {
        $zone = new SaintVincent;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
