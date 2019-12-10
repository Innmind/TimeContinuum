<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\America;

use Innmind\TimeContinuum\{
    Earth\Timezone\America\SaintVincent,
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
