<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Africa;

use Innmind\TimeContinuum\{
    Timezone\Earth\Africa\Bamako,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class BamakoTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Bamako;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
