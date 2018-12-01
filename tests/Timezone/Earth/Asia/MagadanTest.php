<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Asia;

use Innmind\TimeContinuum\{
    Timezone\Earth\Asia\Magadan,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class MagadanTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Magadan;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
