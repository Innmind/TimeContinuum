<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Africa;

use Innmind\TimeContinuum\{
    Earth\Timezone\Africa\Bamako,
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
