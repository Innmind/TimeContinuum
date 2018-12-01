<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\America;

use Innmind\TimeContinuum\{
    Timezone\Earth\America\Kralendijk,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class KralendijkTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Kralendijk;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
