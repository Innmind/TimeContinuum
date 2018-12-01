<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Asia;

use Innmind\TimeContinuum\{
    Timezone\Earth\Asia\Brunei,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class BruneiTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Brunei;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
