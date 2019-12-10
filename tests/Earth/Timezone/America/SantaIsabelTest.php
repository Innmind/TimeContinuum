<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\America;

use Innmind\TimeContinuum\{
    Earth\Timezone\America\SantaIsabel,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class SantaIsabelTest extends TestCase
{
    public function testInterface()
    {
        $zone = new SantaIsabel;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
