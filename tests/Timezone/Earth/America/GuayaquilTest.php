<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\America;

use Innmind\TimeContinuum\{
    Timezone\Earth\America\Guayaquil,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class GuayaquilTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Guayaquil;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
