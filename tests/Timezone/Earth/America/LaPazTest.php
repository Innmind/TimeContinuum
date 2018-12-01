<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\America;

use Innmind\TimeContinuum\{
    Timezone\Earth\America\LaPaz,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class LaPazTest extends TestCase
{
    public function testInterface()
    {
        $zone = new LaPaz;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
